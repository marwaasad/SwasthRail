const backendUrl = "http://localhost:3000"; 

function toggleChat() {
    const chatContainer = document.getElementById("chat-container");
    if (chatContainer.style.display === "none" || chatContainer.style.display === "") {
        chatContainer.style.display = "flex"; 
    } else {
        chatContainer.style.display = "none"; 
    }
}

const records = [];
let context = {
    action: null,    // Current action 
    step: 0,         // Step in the conversation flow
    data: {}         // Temporary storage for user input
};

// Function to calculate string similarity
function getSimilarity(str1, str2) {
    const len1 = str1.length;
    const len2 = str2.length;
    const dp = Array.from({ length: len1 + 1 }, () => Array(len2 + 1).fill(0));

    for (let i = 0; i <= len1; i++) {
        for (let j = 0; j <= len2; j++) {
            if (i === 0 || j === 0) {
                dp[i][j] = i + j;
            } else if (str1[i - 1] === str2[j - 1]) {
                dp[i][j] = dp[i - 1][j - 1];
            } else {
                dp[i][j] = 1 + Math.min(dp[i - 1][j], dp[i][j - 1], dp[i - 1][j - 1]);
            }
        }
    }
    return 1 - dp[len1][len2] / Math.max(len1, len2);
}

// Handle "Add Record" flow
function handleAddRecord(userInput) {
    switch (context.step) {
        case 1:
            context.data.patientID = userInput;
            context.step++;
            return "Got it. What is the doctor's name?";
        case 2:
            context.data.doctorName = userInput;
            context.step++;
            return "Noted. What is the appointment date? (e.g., DD/MM/YY)";
        case 3:
            context.data.appointmentDate = userInput;
            context.step++;
            return "Thank you. Can you provide a brief description of the issue?";
        case 4:
            context.data.description = userInput;

            // Add the new record locally
            records.push(context.data);
            const newRecord = context.data;

            // Send the new record to the backend
            postRecordToBackend(newRecord); // This will make the POST request

            // Reset context
            context = { action: null, step: 0, data: {} };

            return `Thanks! A record has been added with the following details:<br>
            Patient ID: ${newRecord.patientID}<br>
            Doctor: ${newRecord.doctorName}<br>
            Appointment Date: ${newRecord.appointmentDate}<br>
            Description: ${newRecord.description}`;

        default:
            context = { action: null, step: 0, data: {} };
            return "Sorry, something went wrong. Can you start over?";
    }
}

// Function to post the new record to the backend
function postRecordToBackend(record) {
    fetch(`${backendUrl}/patient-record`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(record), // Convert the record object to JSON
    })
    .then(response => response.json())
    .then(data => {
        console.log("Record added successfully:", data);
    })
    .catch(error => {
        console.error("Error adding record:", error);
    });
}

// Handle "View Record" flow
function handleViewRecord(userInput) {
    switch (context.step) {
        case 1:
            context.data.patientID = userInput;

            const record = records.find(r => r.patientID === context.data.patientID);

            if (record) {
                context = { action: null, step: 0, data: {} };

                return `Here is the record for Patient ID: ${record.patientID}:<br>
                Doctor: ${record.doctorName}<br>
                Appointment Date: ${record.appointmentDate}<br>
                Description: ${record.description}`;
            } else {
                
                fetch(`${backendUrl}/patient-record/${context.data.patientID}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Record not found.");
                        }
                        return response.json();
                    })
                    .then(data => {
                        displayMessage(
                            `Here is the record for <br>
                            Patient ID: ${data.patientID}<br>
                            Doctor: ${data.doctorName}<br>
                            Appointment Date: ${data.appointmentDate}<br>
                            Description: ${data.description}`,
                            "bot"
                        );
                    })
                    .catch(error => {
                        displayMessage("No record found for the provided Patient ID.", "bot");
                    });

                context = { action: null, step: 0, data: {} };
                return "Searching for the record...";
            }

        default:
            context = { action: null, step: 0, data: {} };
            return "Sorry, something went wrong. Can you start over?";
    }
}

// Main function to process user input
function getResponse(userInput) {
    const normalizedInput = userInput.toLowerCase().trim();

    if (context.action === "add_record") {
        return handleAddRecord(normalizedInput);
    } else if (context.action === "view_record") {
        return handleViewRecord(normalizedInput);
    }

    // Trigger specific actions
    if (normalizedInput.includes("add patient")) {
        context.action = "add_record";
        context.step = 1;
        context.data = {}; 
        return "Sure. Can you provide the patient's ID?";
    } else if (normalizedInput.includes("view record")) {
        context.action = "view_record";
        context.step = 1;
        return "Please provide the Patient ID to view the record.";
    }

    let bestMatch = null;
    let highestSimilarity = 0;

    for (const [question, response] of trainingData) {
        const normalizedQuestion = question.toLowerCase().trim();
        const similarity = getSimilarity(normalizedInput, normalizedQuestion);

        if (similarity > highestSimilarity && similarity > 0.5) { 
            highestSimilarity = similarity;
            bestMatch = response;
        }
    }

    return bestMatch || "Sorry, I didn't understand that. Can you please rephrase?";
}

// Backend API handler to retrieve record
function fetchRecordFromBackend(patientID) {
    return fetch(`${backendUrl}/patient-record/${patientID}`)
        .then(response => response.json())
        .catch(error => console.error("Error fetching record:", error));
}

function sendMessage(event) {
    if (event.key === "Enter") {
        const userInput = document.getElementById("user-input");
        const message = userInput.value.trim();
        if (message) {
            displayMessage(message, "user");
            userInput.value = ""; // Clear input box

            const botResponse = getResponse(message);
            displayMessage(botResponse, "bot");
        }
    }
}

function displayMessage(message, sender) {
    const chatBox = document.getElementById("chat-box");
    const messageElement = document.createElement("div");
    messageElement.className = `message ${sender}`;
    messageElement.innerHTML = message; 
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight; 
}

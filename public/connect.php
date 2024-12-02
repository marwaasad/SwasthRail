<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "swasthrail";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Clean and validate inputs
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $Age = intval($_POST['Age']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $bloodgroup = $_POST['bloodgroup'];
    $Email = filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL);
    $Mobile = preg_match('/^[0-9]{10}$/', $_POST['Mobile']) ? $_POST['Mobile'] : die("Invalid mobile number");
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $zip = trim($_POST['zip']);
    $blooddate = $_POST['blooddate'];
    $vaccinedate = $_POST['vaccinedate'];
    $donateblood = $_POST['donateblood'];
    $covidnegative = $_POST['covidnegative'];

    // Check if passwords match
    if ($password === $cpassword) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the query
        $stmt = $conn->prepare("INSERT INTO `admin` (`firstname`, `lastname`, `Age`, `dob`, `gender`, 
            `bloodgroup`, `Email`, `Mobile`, `password`, `city`, `state`, `zip`, `blooddate`, 
            `vaccinedate`, `donateblood`, `covidnegative`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisssssssssssss", 
            $firstname, $lastname, $Age, $dob, $gender, 
            $bloodgroup, $Email, $Mobile, $hashed_password, 
            $city, $state, $zip, $blooddate, $vaccinedate, 
            $donateblood, $covidnegative);

        if ($stmt->execute()) {
            echo "<br>Record was inserted successfully";
        } else {
            echo "<br>Record was not inserted successfully: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "<br>Passwords do not match.";
    }
}

$conn->close();
?>


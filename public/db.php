<?php



$conn = new mysqli("localhost", "root", "", "swasthrail");
if (!$conn) {
    echo "This is an error " . $conn->connect_error;
}

?>

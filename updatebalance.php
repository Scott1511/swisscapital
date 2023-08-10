<?php
// Database connection details
$servername = "localhost";
$username = "id20963613_scott";
$password = "Scott151$";
$dbname = "id20963613_reg";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form input values
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$newBalance = isset($_POST['balance']) ? $_POST['balance'] : 0;

// Update the balance in the database based on the provided email
$sql = "UPDATE reglist SET balance = '$newBalance' WHERE email = '$email'";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Balance updated successfully for $firstname.";
} else {
    echo "Error updating balance: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
<?php
// Get the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$homeaddress = $_POST['homeaddress'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$ssn = $_POST['ssn'];
$country = $_POST['nationality'];

// Database connection details
$servername = "sql205.infinityfree.com";
$username = "if0_34578660";
$password = "Scott151";
$dbname = "if0_34578660_token";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO reglist (firstname, lastname, dob, homeaddress, email, pass, ssn, nationality) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssis", $firstname, $lastname, $dob, $homeaddress, $email, $pass, $ssn, $country);

if ($stmt->execute()) {
    header("Location: regsuccess.html");
} else {
    header("Location: notregsuccess.html");
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
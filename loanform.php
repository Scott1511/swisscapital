
<?php
// Get the form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$region = $_POST['region'];
$homeaddress = $_POST['homeaddress'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$ssn = $_POST['ssn'];
$ein = $_POST['ein'];
$loanamount = $_POST['loanamount'];
$loantype = $_POST['loantype'];
$ratetype = $_POST['ratetype'];
$timetoclose = $_POST['timetoclose'];

// Database connection details
$servername = "localhost";
$username = "id20963613_scott";
$password = "Scott151$";
$dbname = "id20963613_reg";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO loan (firstname, middlename, lastname, dob, region, homeaddress, phone, email, ssn, ein, loanamount, loantype, ratetype, timetoclose) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssss", $firstname, $middlename, $lastname, $dob, $region, $homeaddress, $phone, $email, $ssn, $ein, $loanamount, $loantype, $ratetype, $timetoclose);

if ($stmt->execute()) {
    header("Location: submitted.html");
} else {
    header("Location: notsubmitted.html");
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
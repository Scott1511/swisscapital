<?php
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

// Retrieve the form data
$email = $_POST['email'];
$pass = $_POST['pass'];

// Prepare and execute the query
$sql = "SELECT * FROM reglist2 WHERE email = '$email' AND pass = '$pass'";
$result = $conn->query($sql);

// Check if the query returned a result
if ($result && $result->num_rows > 0) {
    // Fetch the row from the result
    $row = $result->fetch_assoc();
    
    // Extract the first name from the row
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $homeaddress = $_POST['homeaddress'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $ssn = $_POST['ssn'];
    $country = $_POST['country'];
    $balance = $POST['balance']


    
    // Redirect to the user dashboard with a query parameter for the first name
    $firstname = urlencode($firstname);
    $lastname = urlencode($lastname);
    $dob = urlencode($dob);
    $homeaddress = urlencode($homeaddress);
    $email = urlencode($email);
    $pass = urlencode($pass);
    $ssn = urlencode($ssn);
    $country = urlencode($country);
    $balance = urlencode($balance);
    
    header("Location: userdashboard.php?firstname=$firstname &  lastname=$lastname & dob=$dob &homeaddress=$homeaddress & email=$email & pass=$pass & ssn=$ssn & country=$country & balance=$balance");
} else {
    // Invalid login, display an error message
    echo "Invalid username or password.";
}

// Close the database connection
$conn->close();
?>

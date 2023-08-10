<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$homeaddress = $_POST['homeaddress'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$ssn = $_POST['ssn'];
$country = $_POST['country']; // Corrected from $_POST['nationality']
$balance = $_POST['balance']; // Corrected typo

$firstname = urlencode($firstname);
$lastname = urlencode($lastname);
$dob = urlencode($dob);
$homeaddress = urlencode($homeaddress);
$email = urlencode($email);
$pass = urlencode($pass);
$ssn = urlencode($ssn);
$country = urlencode($country);
$balance = urlencode($balance);

// Redirect the user to the dashboard page with the data as query parameters
$dashboardUrl = 'http://phpscript.42web.io/bank/userdashboard.html';
$redirectUrl = "$dashboardUrl?firstname=$firstname&lastname=$lastname&dob=$dob&homeaddress=$homeaddress&email=$email&pass=$pass&ssn=$ssn&country=$country&balance=$balance";

header("Location: $redirectUrl");
exit();
?>

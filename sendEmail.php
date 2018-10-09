<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$EmailTo = "sethjfreem@gmail.com";
$Subject = "Contact Form Submitted";
$Name = $_POST['Name']; 
$Email = $_POST['Email']; 
$Message = $_POST['Message']; 

// prepare email body text
$Body = "";
$Body .= "Name Submitted: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email From: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body);
}
?>
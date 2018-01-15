<?php
require "../index.html"; // require the file where is the form

// 1- define variables and set to empty values.
$name = $subject = $email = $message = "";
// 2 - define empty variables to hold the error messages.
$nameErr = $subjectErr = $emailErr = $messageErr = "";
// 3 - confirming the form was sent
$sent = "";

if (isset($_POST['submit'])) {
// checking if the form has been submitted with the method assigned and assign the data through test_input() with $_POST to each variable.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // checking if the variables are empty or not. If it is empty, an error message is stored in the different error variables, and if it is not empty, it sends the user input data through the test_input().
  if (empty($_POST["name"])) {
    $nameErr = "Your name is required";
  } else {
    $name = test_input($_POST["name"]);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    // check if the name field only contains letters and whitespace. If the value of the name field is not valid, then store an error message. The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $nameErr = "Only letters and white space are allowed for your name";
    }
  }
/* SUBJECT */
  if (empty($_POST["subject"])) {
    $subjectErr = "Tyoing a subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    // check if the name field only contains letters and whitespace. If the value of the name field is not valid, then store an error message. The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
  }
/* NAME */
  if (empty($_POST["email"])) {
    $emailErr = "Your email is required";
  } else {
    $email = test_input($_POST["email"]);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // checking if $email is well formed, if the e-mail address is not well-formed, then store an error message
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
/* MESSAGE */
  if (empty($_POST["message"])) {
    $messageErr = "writing a message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  // checking there's no any error, if so send the data
  if(!$nameErr && !$subjectErr && !$emailErr && !$messageErr){
    $sendTo = 'oscar.germadegonzalez@gmail.com';
    $emailSubject = 'Email sent from oscargermade.info';
    $messageSent = "From: $name \n";
    $messageSent .= "Subject: $subject \n";
    $messageSent .= "Email: $email \n";
    $messageSent .= "Message: " . $message;
    $messageSent = wordwrap($messageSent, 70); // lines can not be longer than 70 characters.
    $messageSent = str_replace("\n.", "\n..", $messageSent); // If a full stop is found on the beginning of a line in the message, it might be removed. To solve this problem, replace the full stop with a double dot

    // to send the data by email
    mail($sendTo, $emailSubject, $messageSent); // it doesn't work on xampp, must be updated on a hosting
    $sent = 'true'; // succesfull message that appear in the form
  }
}
}
/*Create a Function that will do all the checking in order not to write the code over and over again for each variable */
function test_input($data) {
  $data = trim($data); // strips unnecessary characters like extra spaces or tabs at the beginning and at the end
  $data = stripslashes($data); // removs backslashes from the user input
  $data = htmlspecialchars($data); // passing all variables through htmlspecialchar()
  return $data;
}
?>

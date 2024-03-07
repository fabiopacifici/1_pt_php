<?php

require_once __DIR__ . '/helpers/functions.php';
// starts the session to enable access to $_SESSION
session_start();
var_dump($_POST);
$email_address = $_POST['email'];

if (checkEmailAddress($email_address)) {

  var_dump('confirmation page');
  var_dump($_SESSION);
  // clean old session variables
  session_unset();

  // set the user email address inside the session
  $_SESSION['email'] = $email_address;
  $_SESSION['username'] = $_POST['full-name'];

  // redirect the user to a success page
  header('Location: success.php');
} else {

  var_dump('error');

  // clean old session variables
  session_unset();

  $errorMessage = 'error email not well formatted';

  var_dump($_SESSION);
  session_unset();
  // Set a session variable
  $_SESSION['error'] = $errorMessage;
  header('Location: ./contact.php');
}

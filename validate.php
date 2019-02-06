<?php

require 'vendor/autoload.php';

use SMTPValidateEmail\Validator as SmtpEmailValidator;

/**
 * Simple example
 */
$email     = $_GET['email'];
$sender    = 'no-reply@gmail.com';
$validator = new SmtpEmailValidator($email, $sender);

// $validator->setConnectTimeout(120);

// If debug mode is turned on, logged data is printed as it happens:
// $validator->debug = true;
$results   = $validator->validate();
echo json_encode($results);
return;

// var_dump($results);

// Get log data (log data is always collected)
// $log = $validator->getLog();
// var_dump($log);
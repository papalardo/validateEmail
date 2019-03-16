<?php

require 'vendor/autoload.php';

use SMTPValidateEmail\Validator as SmtpEmailValidator;

$email     = $_GET['email'];
// $sender    = 'no-reply@gmail.com';
$sender    = $email;
// $sender    = 'allfinan@bol.com.br';
$validator = new SmtpEmailValidator($email, $sender);

$validator->setConnectTimeout(30);

// $validator->debug = true;

$results   = $validator->validate();
echo json_encode($results);
return;

// See logs

// $log = $validator->getLog();
// var_dump($log);
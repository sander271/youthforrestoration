<?php
require 'vendor/autoload.php';
$sendgrid = new SendGrid('SENDGRID_PASSWORD', 'SENDGRID_USERNAME');

$message = new SendGrid\Email();
$message->addTo('sanders271@gmail.com')->
setFrom('sanders271@gmail.com')->
setSubject('Subject goes here')->
setText('Hello World!')->
setHtml('<strong>Hello World!</strong>');
$response = $sendgrid->send($message);
?>
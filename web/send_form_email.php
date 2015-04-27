<?php
//require 'vendor/autoload.php';
//echo "<h1>hello " .var_dump(getenv('SENDGRID_USERNAME'),$_ENV). "</h1>";
//$SENDGRID_USERNAME = $_ENV["SENDGRID_USERNAME"];
//$SENDGRID_PASSWORD = $_ENV["SENDGRID_PASSWORD"];
//$sendgrid = new SendGrid($SENDGRID_USERNAME, $SENDGRID_PASSWORD);
//
//$message = new SendGrid\Email();
//$message->addTo('sanders271@gmail.com')->
//setFrom('sanders271@gmail.com')->
//setSubject('Subject goes here')->
//setText('Hello World!')->
//setHtml('<strong>Hello World!</strong>');
//$response = $sendgrid->send($message);
//?>
<?php
//// the message
//$msg = "First line of text\nSecond line of text";
//
//// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);
//
//// send email
//mail("someone@example.com","My subject",$msg);
//?>
<?php
$to = "sanders271@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
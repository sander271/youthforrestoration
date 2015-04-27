<?php
require 'vendor/autoload.php';
$sendgrid = new SendGrid('app35784872@heroku.com', 'djlwgn2x',array("turn_off_ssl_verification" => true));
$email = new SendGrid\Email();
$email
    ->addTo('sanders271@gmail.com')
    ->setFrom('sanders271@gmail.com')
    ->setSubject('Subject goes here')
    ->setText('Hello World!')
    ->setHtml('<strong>This was sent at 5:53</strong>')
;

try {
    $sendgrid->send($email);
    echo "Email sent";
} catch(\SendGrid\Exception $e) {
    echo $e->getCode();
    foreach($e->getErrors() as $er) {
        echo $er;
    }
}
?>
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
//$to = "sanders271@gmail.com";
//$subject = "My subject";
//$txt = "Hello world!";
//$headers = "From: webmaster@example.com" . "\r\n" .
//    "CC: somebodyelse@example.com";
//
//mail($to,$subject,$txt,$headers);
//?>
<!DOCTYPE html>
<html>
<head>
    <title>Email Submission</title>
    <link type="text/css" rel="stylesheet" href="CSS/layout.css"/>
    <script>
        function home(){
            location.assign("index.php");
        }
    </script>
</head>
<body>
        <?php
        include 'vendor/autoload.php';

        if(isset($_POST['email'])) {
        // EDIT THE 2 LINES BELOW AS REQUIRED
            $email_to = "sanders271@gmail.com";
            $email_subject = "Message from Youth for Restoration Website";
            function died($error)
            {
                // your error code can go here
                echo "<p class='text'>We are very sorry, but there were error(s) found with the form you submitted. </p>";
                echo "<p class='text'>These errors appear below. </p><br /><br />";
                echo "<p class='text'>" .$error. "</p><br /><br />";
                echo "<p class='text'>Please go back and fix these errors.</p><br /><br />";
                die();
            }

        // validation expected data exists
            if (!isset($_POST['first_name']) ||
                !isset($_POST['last_name']) ||
                !isset($_POST['email']) ||
                !isset($_POST['telephone']) ||
                !isset($_POST['comments'])
            ) {
                died('We are sorry, but there appears to be a problem with the form you submitted.');
            }
            $first_name = $_POST['first_name']; // required
            $last_name = $_POST['last_name']; // required
            $email_from = $_POST['email']; // required
            $telephone = $_POST['telephone']; // not required
            $comments = $_POST['comments']; // required
            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
            if (!preg_match($email_exp, $email_from)) {
                $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
            }
            $string_exp = "/^[A-Za-z .'-]+$/";
            if (!preg_match($string_exp, $first_name)) {
                $error_message .= 'The First Name you entered does not appear to be valid.<br />';
            }
            if (!preg_match($string_exp, $last_name)) {
                $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
            }
            if (strlen($comments) < 2) {
                $error_message .= 'The Comments you entered do not appear to be valid.<br />';
            }
            if (strlen($error_message) > 0) {
                died($error_message);
            }
            $email_message = "Form details below.\n\n";
            function clean_string($string)
            {
                $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                return str_replace($bad, "", $string);
            }

            $email_message .= clean_string($first_name) . "\n";
            $email_message .= " " . clean_string($last_name) . "\n";
            $email_message .= "Email: " . clean_string($email_from) . "\n";
            $email_message .= "Telephone: " . clean_string($telephone) . "\n";
            $email_message .= "Comments: " . clean_string($comments) . "\n";
        // create email headers
            $headers = 'Reply-To: ' . $email_from . "\r\n";

//            @mail($email_to, $email_subject, $email_message, $headers);

            $sendgrid = new SendGrid('app35784872@heroku.com', 'djlwgn2x',array("turn_off_ssl_verification" => true));
            $email = new SendGrid\Email();
            $email
                ->addTo($email_to)
                ->setFrom('sanders271@gmail.com')
                ->setSubject($email_subject)
                ->setText('Hello World!')
                ->setHtml('<p>' .$headers. '</p>
                            <p>' .$email_message. '</p>')
            ;

            try {
                $sendgrid->send($email);
            } catch(\SendGrid\Exception $e) {
                echo $e->getCode();
                foreach($e->getErrors() as $er) {
                    echo $er;
                }
            }
        }
        ?>
        <h3 class="text">Thank you for your email. We will get back to you as soon as possible</h3>
        <button onclick="home()">Home</button>
    </body>
</html>
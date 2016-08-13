<?php
//if(empty($_POST['name'])  		||
//   empty($_POST['surname'])     ||
//   empty($_POST['email']) 		||
//   empty($_POST['message'])	||
//   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
//	echo "No arguments Provided!";
//	return false;
//   }
//var_dump($_POST);

        //variables
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email_address = $_POST['email'];
        $message = $_POST['message'];
        
        // Create the email and send the message
        $to = 'tedbelfadla@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Question about GSD Camp";
        $email_body = "You have received a new message from your website contact form.\n\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

        mail($to,$email_subject,$email_body,$headers);
        //return true;
?>
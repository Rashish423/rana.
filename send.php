<?php
$fname = $_POST['First Name'];
$lname = $_POST['Last Name'];

	$visitor_email = $_POST['Email Address'];
	$message = $_POST['Message'];
        $email_from = 'ashishmkcl480@gmail.com';
        $email_subject = 'New Form Submission';
        $email_body = 'User name: $fname.\n'.  'User name: $lname.\n'.
				  'User email: $visitor_email.\n'.
				  'User message: $message.\n';
        $to = 'rashish423@gmail.com';
        $headers = 'From: $email_from \r\n';
       $headers .= 'Reply-to: $visitor_email \r\n';
	mail($to,$email_subject,$email_body,$headers);
        header('Location: index.html');
?>

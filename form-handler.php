<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'info@vitalchecksandcare.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $vistor_email.\n".
              "subject: $subject.\n".
              "User Message: $message .\n";

$to = 'derekanimd15@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $vistor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contacts.htlm");
?>
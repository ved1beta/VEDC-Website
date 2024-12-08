<?
$mail_to_send_to = "edc@vit.edu";
$from_email = "admin@ecellvitpune.com";
$name=$_REQUEST['first_name'];

    $subject= $_POST['subject'];
    // Subject
	if ($subject == '') { $subject = "ECellvitpune Contact Form Query"; }

    $email = $_REQUEST['email'] ;
        // Set Message
   $message .= "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= $_REQUEST['message'];
   $message .= "<br /> ----- <br /> This email was sent via Ecellvitpune contact form. <br />";
   $message .= "Copyright © 2021 E-CELL VIT Pune | VEDC, All rights reserved.<br />";
          
      //get recipient name in contact form
    //$message = $message.$_REQUEST['message'] . "\r\n" ;//add message from the contact form to existing message(name of the client)
    
    $headers = "From: $from_email" . "\r\n" . "Reply-To: $email" . "\r\n" ;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $a = mail( $mail_to_send_to, $subject, $message, $headers );
    if ($a==1)
    {
        echo "We have received your Mail $name, We'll contact you soon.";
    } else {
         echo "Mail wasn't sent, please retry again.";
    }

?>
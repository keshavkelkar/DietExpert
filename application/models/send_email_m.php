<?php

class Send_email_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function SaveForm($form_data)
	{
            require 'PHPMailer/PHPMailerAutoload.php';

            //Create a new PHPMailer instance
            $mail = new PHPMailer;

            //Tell PHPMailer to use SMTP
            $mail->isSMTP();

            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 2;

            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';

            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';

            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;

            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';

            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;

            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = "omkar4study";

            //Password to use for SMTP authentication
            $mail->Password = "wallcott31";

            //Set who the message is to be sent from
            $mail->setFrom('omkar4study@gmail.com', 'Omkar');

            //Set an alternative reply-to address
            $mail->addReplyTo($form_data['registered_email_id'], 'Omk');

            //Set who the message is to be sent to
            $mail->addAddress($form_data['registered_email_id'], 'Omk');

            //Set the subject line
            $mail->Subject = 'PHPMailer GMail SMTP test';

            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
           // $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

            $mail->Body=$form_data['message'];

            //send the message, check for errors
            if (!$mail->send()) {
                return false;
            } else {
                return true;
            }
	}
}
?>
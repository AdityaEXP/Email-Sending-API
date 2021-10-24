<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$GetBody = array('fromEmail', 'toEmail', 'emailSubject', 'emailMessage', 'emailPassword');

function checkGetExists($variable){
    if(isset($variable)) {
        return true;
    }else{
        return false;
    }
}

foreach($GetBody as $key){
    if (!array_key_exists($key, $_GET)) {
        die("Missing $key Parameter.");
    }
}

$mail = new PHPMailer(true);
try {
	$mail->isSMTP();
	$mail->Host	 = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = $_GET[$GetBody[0]];
	$mail->Password = $_GET[$GetBody[4]];
	$mail->SMTPSecure = 'tls';
	$mail->Port	 = 587;

	$mail->setFrom($_GET[$GetBody[0]], $_GET[$GetBody[0]]);
	$mail->addAddress($_GET[$GetBody[1]]);

	$mail->isHTML(true);
	$mail->Subject = $_GET[$GetBody[2]];
	$mail->Body = $_GET[$GetBody[3]];
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

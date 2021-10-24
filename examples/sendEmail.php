<?php
$your_email = 'myGmail@gmail.com';
$to_email = 'reciverGmail@gmail.com';
$subject = urlencode('About Nice Weather!');
$message = urlencode('Its such a nice weather lets hang out');
$emailPassword = 'xsydtdiyiudgiud';

$url = "http://domain.com/?fromEmail=$your_email&toEmail=$to_email&emailSubject=$subject&emailMessage=$message&emailPassword=$emailPassword";
$result = file_get_contents($url);
print_r($result);
?>

# Email-Sending-API
### Send Email By PHP, Python Any Many More....

### Setuping UP
> Normal Google Password Won't Work You Have To Create App Password.
>
> Go To The Video And Create One => https://youtu.be/J4CtP1MBtOE (**Video Is Not Mine Its From Youtube.**)

<br>

### Now let's see how to use it its simple!!
https://yourdomain.com?fromEmail=None&toEmail=None&emailSubject=None&emailMessage=None&emailPassword=None

<br>

```
fromEmail => Your Email
toEmail => Reciver Email
emailSubject => Subject Of Email 
emailMessage => Message You Want To Send (HTML Supported)
emailPassword => App Password Obtain From Video
```

<br>

#### PHP Code Example

```
<?php
$your_email = 'myGmail@gmail.com';
$to_email = 'reciverGmail@gmail.com';
$subject = urlencode('About Nice Weather!');
$message = urlencode('Its such a nice weather lets hang out');
$emailPassword = 'xsydtdiyiudgiud';

$url = "http://domain.com/?fromEmail=$your_email&toEmail=$to_email&emailSubject=$subject&emailMessage=$message&emailPassword=$emailPassword"
?>
```

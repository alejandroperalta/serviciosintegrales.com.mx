<?php

if(!$_POST) exit;

if(!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(get_magic_quotes_gpc()) {
    $message = stripslashes($message);
}

$address = "ventas@serviciosintegrales.com.mx";


$is_subject = $subject;


$is_body = "Usted ha sido contactado por $name con respecto a $subject, su mensaje es el siguiente.. " . PHP_EOL . PHP_EOL;
$is_content = "\"$message\"" . PHP_EOL . PHP_EOL;
$is_reply = "Puedes contactar a $name via email: $email";

$msg = wordwrap($is_body . $is_content . $is_reply, 70);

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $is_subject, utf8_decode($msg), $headers)) {
	
	echo 'success';

} else {
    
	echo 'failed';
}

?>
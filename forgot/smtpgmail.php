<?php
include("../../include/settings1.php");
include "classes/class.phpmailer.php";


 // include the class name
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = $_POST["email"];
$mail->Password = $_POST["pass"];
//$mail->SetFrom("abc@gmail.com");
$mail->Subject = "Contact Us query";
$mail->Body = "<b>User's contact us query: ".$_POST["message"]."</b>";


$mail->AddAddress($_POST["email"]);		//mail address of sender

if(!$mail->Send())
{
	echo "Mailer Error: " . $mail->ErrorInfo;
}
/*else
{
	header("location:SentEmail_mp.php");
}*/
?>
<?php 


if(isset($_REQUEST['submit']))
{
	
	$receive=$_POST['email'];
	$subject="SMOLOV CALCULATOR";
	$body=$_POST['body'];
	
	include 'PHPMailer/class.phpmailer.php';
	//require_once 'PHPMailer/PHPMailerAutoload.php';
	//require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->SMTPSecure = 'ssl';

	$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 465;
// $mail->SMTPDebug=1;

	$mail->SMTPAuth = true;     // turn on SMTP authentication
	
	$mail->Username = 'aakarshkulkarni9@gmail.com';  // SMTP username

$mail->Password = 'gabbarsingh'; // SMTP password

$mail->From = 'aakarshkulkarni9@gmail.com';


	$mail->FromName = "Simple Mail Test";
	
	$mail->AddAddress($receive);               
   // name is optional
	
	
	
	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	
	$mail->IsHTML(true);                                  // set email format to HTML
	
	$mail->Subject = $subject;
	
	$mail->Body    = $body;
	
	if(!$mail->Send())
	{
		echo "<h1>Mailer Error: '</h1>'" ;
	
	}
	else
		echo "<h1>Mail Sent Successfully</h1>";
}
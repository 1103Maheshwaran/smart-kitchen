
<?php
$name=$_POST["content"];

if($name=="water")
{
//$name="Water";
	//$name=$_POST["content"];


	$mess= "You need to drink more water ";
}
else if($name=="oil")
{$mess="This mail will send the data regarding the amount of oil consumed over this week in the form of a csv file" ;}
	
	
	$err = "";
	
// MAILER
	date_default_timezone_set('Etc/UTC');
	include('/usr/share/php/libphp-phpmailer/class.phpmailer.php');
	include('/usr/share/php/libphp-phpmailer/class.smtp.php');
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "1103maheshwaran@gmail.com";
	//Password to use for SMTP authentication
	$mail->Password = "sriganesh";
	//Set who the message is to be sent from
	$mail->setFrom( '1103maheshwaran@gmail.com' , 'Smart Kitchen' );
	//Set an alternative reply-to address
	// $mail->addReplyTo($from, $name);
	//Set who the message is to be sent to
	$mail->addAddress("1103maheshwaran@gmail.com", "MaheshwaranGGGG");
	$mail->addAddress("rahul.bs2015@vit.ac.in ", "MaheshwaranG");
	$mail->addAddress("g.maheshwaran2015@vit.ac.in ", "MaheshwaranG");
	$mail->addAddress("kc.sagarsubbaiah@vit.ac.in ", "MaheshwaranG");
	$mail->addAddress("aditya.menon2015@vit.ac.in ", "MaheshwaranG");
	$mail->addAddress("mayank.kumar2015@vit.ac.in ", "MaheshwaranG");
	$mail->addAddress("sagar.sinha2015@vit.ac.in ", "MaheshwaranG");
	$mail->addAddress("aditya.dobriyal2015@vit.ac.in ", "MaheshwaranG");

	$mail->Subject = "Smart Kitchen Report";
	$mail->Body = $mess;
	
	if (!$mail->send()) {
	    $err = "Sorry, There's been some trouble. Try again please. " . $mail->ErrorInfo;
	} else {
	    $err = "Smart Kitchen has sent an E-mail Please Check!!!";
	}
echo $err;
?>
.
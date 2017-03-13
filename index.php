<?php 
	require_once('vendor/autoload.php');

	$mailer = new PHPMailer;

	$mailer->isSMTP();

	$mailer->SMTPAuth = true;

	$mailer->SMTPDebug = 2; //Will provide messages 1 will provide both messages and erors

	$mailer->Host = 'smtp.gmail.com';

	$mailer->Username = 'arpit.engghelp@gmail.com';

	$mailer->Password = '9835673415';

	$mailer->SMTPSecure = 'ssl';

	$mailer->Port = 465;

	$mailer->From = 'arpit.engghelp@gmail.com';

	$mailer->FromName = 'Arpit Anand';

	$mailer->addReplyTo('arpit.engghelp@gmail.com' , 'Reply address');

	$mailer->addAddress('mjarpitanand@gmail.com' , ''); //can be called many times as we want.

	// $mailer->addCC('arpit.engghelp@gmail.com' , '');

	//$mailer->addBCC('arpit.engghelp@gmail.com' , '');

	$mailer->Subject = "Check Mail";

	$mailer->Body = "Body of the email";

	$mailer->AltBody = "Body of the email";

	if($mailer->send()){
		echo 'Email Sent';
	}else{	
		echo $mailer->ErrorInfo;
	}

?>
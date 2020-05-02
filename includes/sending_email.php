<?php


function email($to,$subject,$message){

		
		$mail=new PHPMailer();
		$mail->CharSet = 'UTF-8';

		$mail->IsSMTP();
		$mail->Host       = 'lapras.rapidplex.com';
		$mail->SMTPSecure = 'ssl';
		$mail->Port       = 465;
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;

		$mail->Username   = 'no-reply@3tni.mabes.online';
		$mail->Password   = '7ZLxzjWX#KS2';
		//$mail->addCustomHeader($from);
		$mail->SetFrom('no-reply@3tni.mabes.online');

		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->addAddress($to);

		$mail->send();
		//send the message, check for errors
		// if (!$mail->send()) {
		//     echo "Mailer Error: " . $mail->ErrorInfo;
		// } else {
		//     echo "Message sent!";
		// }

}


?>
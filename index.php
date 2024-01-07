<?php
include('smtp/PHPMailerAutoload.php');

$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->SMTPSecure="ssl";
$mail->SMTPAuth=true;
$mail->Username="USERNAME";
$mail->Password="16_DIGIT_TOKEN";
$mail->SetFrom("EMAIL_ID");
$mail->addAddress('EMAIL_ID');
$mail->IsHTML(true);
$mail->Subject="Here is the Subject";
$mail->Body="This is the email body";

// if there is any attachment
// $mail->AddAttachment("__file_path__");
// $mail->SMTPOptions=array('ssl'=>array(
// 	'verify_peer'=>false,
// 	'verify_peer_name'=>false,
// 	'allow_self_signed'=>false
// ));
if($mail->send()){
	echo "Email Sent";
}else{
	echo "Error occur";
}

?>
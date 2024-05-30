<?php
include('smtp/PHPMailerAutoload.php');

echo smtp_mailer('piyushraikwar289@gmail.com','Subject','html');
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "emailbot4all@gmail.com";
    $mail->Password = "siomkbvpakcldsoa";
    $mail->SetFrom("emailbot4all@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );
    if (!$mail->Send()) {
        echo "<div style='background:red; color:#fff; font-size:24px;'>Plesase cheack Your Internet Connection !!</div>";
    } else {
        return "<script>window.location.href='https://cibadress.com/app/project.dev/admin/forgot_password_otp_auth.php'</script>";
    }
}

?>
<?php

	
require __DIR__.'/phpmailer/PHPMailerAutoload.php';

// recebe as Variaveis
$nome     = $_POST["nome"];
$email    = $_POST["email"];
$assunto   = "E-mail enviado do site"; // $_POST["assunto"];
$mensagem = $_POST["mensagem"];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers - smtp.gmail.com
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'camillafranca20@hotmail.com';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setLanguage('pt', 'phpmailer/language');

$mail->setFrom('camillafranca20@hotmail.com', $nome);
$mail->addAddress('camillafranca20@hotmail.com', 'Camilla');     // Add a recipient  // Name is optional
$mail->addReplyTo($email, $nome);



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $assunto;

if($mensagem == ""){
	$mail->Body	= "Usuário não digitou nada na caixa de mensagem.";
}else{
	$mail->Body    = $mensagem;
	$mail->AltBody = $mensagem;
}



if(!$mail->send()) {
    echo 'Erro ao enviar o e-mail.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'E-mail enviado com sucesso.';
}
?>


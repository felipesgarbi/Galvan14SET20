<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	//Server settings
	//$mail->SMTPDebug = 2;
	//$mail->Debugoutput = 'html';                    // Enable verbose debug output
	$mail->isSMTP();                                            // Send using SMTP
	$mail->Host       = 'mail.fesper.com.br';                    // Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	$mail->Username   = 'thyago@fesper.com.br';                     // SMTP username
	$mail->Password   = 'fesper@123';                               // SMTP password
	$mail->SMTPSecure = 'TLS';
	$mail->Port = 587;                                 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	$mail->CharSet = 'UTF-8';
	$mail->SMTPAutoTLS = false;
	//Recipients
	$mail->setFrom('thyago@fesper.com.br', "Galvan Engenharia");
	$mail->AllowEmpty = true;
	$mail->addAddress('thyago-asp@hotmail.com');               // Name is optional
	//$mail->addCC('thyago-asp@hotmail.com');
	// Attachments
	//  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


	$site = "www.galvanengenharia.com";
	$nomeEmpresa = "Galvan Engenharia | O Amanhã a gente projeta hoje | Joinville/SC";
	$telefoneEmpresa = "+55 47 9.8919-0606";
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];
	$texto = "<h3> Formulário </h3><br>
			<b>Nome do Cliente:</b> $nome<br>
			<b>Telefone:</b> $telefone<br>
			<b>E-mail:</b> $email<br>
			<b>Mensagem:</b> $mensagem<br>";
	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Olá, seu cliente preencheu um formulário de contato no site da Galvan Engenharia.';
	$mail->Body    = $texto;
	$mail->AltBody = '$texto';

	$mail->send();
	header('Location: ./?r=1');

} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
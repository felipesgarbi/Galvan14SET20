<?php
/* Envio de E-mail mail()
Arquivo enviaContato.php - PHP
criado: 16/08/2018
atualizado: 12/05/2020
Criado por: @Bross
www.tosempreai.com.br
mlvpirani@gmail.com
 ***********************************************************
 */


// Altera Aqui

$site= "www.galvanengenharia.com";
$nomeEmpresa = "Galvan Engenharia | O Amanhã a gente projeta hoje | Joinville/SC";
$telefoneEmpresa = "+55 47 9.8919-0606";
$urlLogo = "http://tosempreai.com.br/wp-content/uploads/2017/06/tosempreai.png";


// Aqui simplesmente estou pegando os input do formulário via post

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
$texto = "<h3> Formulário </h3><br>
			<b>Nome do Cliente:</b> $nome<br>
			<b>Telefone:</b> $telefone<br>
			<b>E-mail:</b> $email<br>
			<b>Mensagem:</b> $mensagem<br>";

//AQUI ENVIO O PRIMEIRO EMAIL PARA O DESTINATARIO
$emailDestino = "contato@gestordegabinete.com.br";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8";
$headers .= "From:" . $email . "\r\n";

mail($emailDestino, 'Olá, seu cliente preencheu um formulário de contato no site da Galvan Engenharia.', $texto, $headers);

//AQUI ENVIO O PARA O CLIENTE

$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=UTF-8";
$headers2 .= "From:" . $emailDestino . " \r\n";
$texto .= "Olá, Tudo bem? Seu e-mail foi recebido por um de nossos atendentes,<br>
			em breve responderemos!<br>
			<br>
			Departamento Comercial | Galvan Engenharia<br>
			".$site."<br>
			".$telefoneEmpresa."<br>
			<br>
			<img src='".$urlLogo."'>";

mail($email, 'Olá, somos da Galvan Engenharia. Já recebemos a sua mensagem.', $texto, $headers2);

//REDIRECIONO PARA PAGINA CONTATO.PHP
print '<script>location.href= "contact.php";</script>';
echo "Mensagem enviada com sucesso!";

?>

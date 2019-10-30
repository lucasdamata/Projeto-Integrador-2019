
 <script src="../static/js/curso.js"></script>

<?php
	
	require 'PHPMailerAutoload.php';


	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$assunto  = "Mensagem Autmatica de contato";
	$mensagem = $_POST['mensagem'];

	$mail = new PHPMailer;

	$mail->isSMTP();

	$mail->Host= 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';

	$mail->Username = 'diwdi77@gmail.com';
	$mail->Password = 'ogoid369852471';
	$mail->Port = 587;
	
	$destino = "diogoantonio47@hotmail.com";

	$mail->setFrom('$email', 'Contato');
	$mail->AddAddress($destino);

	$mail->isHtml(true);

	$mail->Subject = $assunto;
	$mail->Body = "<h3>Olá Renata tudo bem sou o(a):</h3> $nome" ."esse e meu numero de contato". $telefone .
	"<br>"."Gostaria de comunicar:". $mensagem . "<br>".
	"Caso precise este e meu email de contato:". $email;

	$mail->AddAttachment($dir.$imagem);

	if(!$mail->send()){
		
		echo 'Não foi possível enviar a mensagem.<br>';
		echo 'Erro:' . $mail->ErrorInfo;
	}else{
		echo "M.toast({html: 'I am a toast!'})";
	}

	header('Location:../contato.php');


?>

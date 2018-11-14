<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

// Envio do E-mail

	require_once('class.phpmailer.php');
	 
	$mailer = new PHPMailer();
	$mailer->IsSMTP(true);
	$mailer->SMTPDebug = 0;
	$mailer->Port = 465; //Indica a porta de conexão para a saída de e-mails. Utilize obrigatoriamente a porta 587.
	$mailer->SMTPAuth = true;
	$mailer->SMTPSecure = 'ssl';
	$mailer->Host = 'smtp.gmail.com'; //Onde em 'servidor_de_saida' deve ser alterado por um dos hosts abaixo:


	
	$mensagem = "
	<table width='800px' style='border:1px solid #000; width:800px; max-width:800px;'>
		<tr>
			<td style='padding:10px 10px 10px 10px; text-align:left; font-family:Tahoma, Geneva, sans-serif'>
			Ol&aacute;, <strong>Equipe</strong> , o visitante abaixo acabou de enviar uma mensagem no site!<br><br>
			<strong>Nome:</strong> ".utf8_decode($_POST['campo1'])."<br><br>
			<strong>E-mail:</strong> ".utf8_decode($_POST['campo2'])."<br><br>
			<strong>Telefone:</strong> ".utf8_decode($_POST['campo3'])."<br><br>
			<strong>Mensagem:</strong> ".utf8_decode($_POST['campo4'])."<br><br>
			Clique em 'Responder' neste e-mail para retornar para ele.<br><br>
			<strong>Equipe</strong>
			</td>
		</tr>
	</table>
	";
	
	$destinatario = 'jricardogreis@gmail.com';
	
	$mailer->SMTPAuth 	= true; //Define se haverá ou não autenticação no SMTP
	$mailer->Username 	= 'iwybbo@gmail.com'; //Informe o e-mai o completo
	$mailer->Password 	= 'wybbo102030'; //Senha da caixa postal
	$mailer->FromName 	= 'Equipe Wybbo'; //Nome que será exibido para o destinatário
	$mailer->From 		= 'iwybbo@gmail.com'; //Obrigatório ser a mesma caixa postal indicada em "username"
	$mailer->AddReplyTo($_POST['campo2'], $_POST['campo1']);
	$mailer->AddAddress($destinatario); //Destinatários
	$mailer->IsHTML(true); 
	$mailer->Subject 	= "Contato enviado pelo site";
	$mailer->Body 		= $mensagem;
	
	if($mailer->Send()){
		
		echo "<strong>Mensagem enviada com sucesso!</strong><br><br>";
	}
	
	// Fim do Envio do E-mail


?>
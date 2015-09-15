<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Intranet - SEBRAE PREVIDÊNCIA</title>

</head>



<body>

	<?php

		if (isset($_POST['btn'])) {

			if(empty($_POST['user'])) {

				echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>*Digite seu Usuário!</div>';

			} elseif (empty($_POST['mail'])) {

				echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>*Digite seu E-mail!</div>';

			} else {

				$user = $_POST['user'];

				$email = $_POST['mail'];

				include("php/conexao.php");

				$sql = "SELECT nome,usuario,mail FROM login";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$tU = false;

				$tM = false;

				while($consulta = mysql_fetch_array($select)) {

					if ($consulta['usuario'] == $user) {

						$tU = true;

						if ($consulta['mail'] == $email) {

							$tM = true;

							$nome = $consulta['nome'];

						}

					}

					

				}

				if ($tU==false) {

					echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>*Este Usuário não esta Cadastrado!</div>';

				} elseif ($tM==false) {

					echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>*E-mail Inválido para este Usuário! Informe o E-mail Cadastrado em sua conta de Usuário na Intranet.</div>';

				} else {

					// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.

					// O return-path deve ser ser o mesmo e-mail do remetente.

					$page = uniqid();

					$contentPage = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div id="rodape-geral" style="margin-top:0px;background:#fff">



<div id="cadastrar" style="background:#fff;">

<h1 style="font-size:32px;text-align:left;font-weight:600; color:#1e84ce;font-family:handel,calibri,arial;">Alteração de Senha</h1>

<h2 style="margin-top:10px;text-align:left;">Digite Sua Nova Senha Abaixo!</h2>

<form method="post" action="index.php?trocaSenha=true&page='.$page.'" id="formValidaSenha">

<table>



<tr>

<td valign="middle" class="texto">Nova Senha</td>

<td><input type="password" tabindex="1" id="mail" name="newPass" style="border:1px solid #666;" value="<?php if(isset($_POST["newPass"])) { echo $_POST["newPass"]; } ?>" /></td>

</tr>



<tr>

<td valign="middle" class="texto">Confirmação de Senha</td>

<td><input type="password" tabindex="1" id="nome" name="confirmPass" style="border:1px solid #666;" value="<?php if(isset($_POST["confirmPass"])) { echo $_POST["confirmPass"]; } ?>" /></td>

</tr>



<tr>

<td></td>

<td align="right" id="teste-link" valign="bottom">

<a href="index.php">Inicio </a> / <a href="http://www.sebraeprev.com.br" target="_blank">Conheça o Sebrae Previdência</a> / <a href="http://sebraeprev.com.br/?secao=secoes.php&sc=112&sub=MA==&url=contato.php" target="_blank">Fale Conosco</a>

<button type="submit" id="botao" name="btn"><b>Alterar Senha</b></button>

</td>

</tr>

	<input type="hidden" name="nameUser" value="<?php echo $_GET["nameUser"]; ?>" />

	<input type="hidden" name="page" value="<?php echo $_GET["page"]; ?>" />

</table>

</form>

	<?php include("php/alteraSenha.php"); ?>

</div>



<div id="teste">

	<img src="../../imagens/cadeado.png" />

</div>





<div id="website">Intranet Sebrae Previdência - Desenvolvido por Deivide Guimarães</div>

<di id="copyright">Copyright 2013 todos os direitos reservados</div>





<div id="clientes">

<?php

		include("php/conexao.php");

		$sql = "SELECT * FROM endRodape";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);

		echo $consulta["texto"];

	?>



</div>



</div><!--fecha content-premium-->

</div><!-- fecha rodape-geral -->

	';

					//cria o arquivo

					$arquivo = fopen($page.".php","w");

					// grava o texto

					fwrite($arquivo,$contentPage);

					// fecha o arquivo

					fclose($arquivo);

					//mensagem

					$msgm = '<table>

								<tr>

									<td colspan="2"><img src="http://www.intrasebraeprev.com.br/imagens/logo.PNG"></td>

								</tr>

								<tr>

									<td colspan="2"><h1 style="color:#1e84ce;font-family:arial;font-weight:600;">Pedido de Recuperação de Senha</h1></td>

								</tr>

								<tr>

									<td colspan="3">

										<p style="text-indent:10px;">

											Recebemos em nosso sistema o pedido para recuperação de senha, abaixo seguem os dados do pedido e acesso:

										</p>

									</td>

								</tr>

								<tr>

									<td><b>Usuário Informado:</b> </td>

									<td> '.$user.' </td>

								</tr>

								<tr>

									<td><b>E-mail Informado:</b> </td>

									<td>'.$email.' </td>

								</tr>

								<tr>

									<td><b>Acessado:</b> </td>

									<td> Dia: '.date("d/m/y").' às '.date('H:i').' </td>

								</tr>

								<tr>

									<td></td>

								</tr>

								<tr>

									<td> Altere sua Senha: </td>

									<td> <a href="http://www.intrasebraeprev.com.br/index.php?trocaSenha=true&nameUser='.base64_encode($user).'&page='.$page.'">Clique Aqui.</a></td>

								</tr>

								<tr>

									<td></td>

								</tr>

								<tr>

									<td colspan="2"><h2>SEBRAE PREVIDENCIA<h2></td>

								</tr>

								<tr>

									<td colspan="3">

<i>Edificio Venâncio 3000, Torre A, Salas 504/506 - Setor Comercial Norte - Asa Norte - Brasília - DF / CEP 70.716-900</i>

									</td>

								</tr>

								<tr>

									<td>

									<b>sebraeprev@sebraeprev.org.br - (61) 3327 - 1226</b>

									</td>

								</tr>

							</table>

							';

					$msgmPlain = '

					Pedido de Recuperação de Senha \r\n \r\n 

					Recebemos em nosso sistema o pedido para recuperação de senha, abaixo seguem os dados do pedido e acesso:\r\n 

					Usuário Informado: '.$user.' \r\n 

					E-mail Informado: '.$email.'\r\n 

					Acessado: Dia: '.date("d/m/y").' às '.date('h:i:S').' \r\n \r\n 

					Altere sua Senha, Copie e cole o endereço abaixo no navegador: \r\n \r\n 

					http://www.intrasebraeprev.com.br/index.php?trocaSenha=true&nameUser='.base64_encode($user).'&page='.$page.' \r\n \r\n 



					Sebrae Previdência - Edificio Venâncio 3000, Torre A, Salas 504/506 - Setor Comercial Norte - Asa Norte - Brasília - DF / CEP 70.716-900 \r\n 

				sebraeprev@sebraeprev.org.br - (61) 3327 - 1226 \r\n \r\n 

				

				<img src="http://www.intrasebraeprev.com.br/imagens/logo.PNG">

							';

 

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

require("phpmailer/class.phpmailer.php");

 

// Inicia a classe PHPMailer

$mail = new PHPMailer();

 

// Define os dados do servidor e tipo de conexão

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(); // Define que a mensagem será SMTP

$mail->Host = "smtp.intrasebraeprev.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)

$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)

$mail->Username = 'suporte@intrasebraeprev.com.br'; // Usuário do servidor SMTP

$mail->Password = 'vagalume9'; // Senha do servidor SMTP

 

// Define o remetente

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->From = "suporte@intrasebraeprev.com.br"; // Seu e-mail

$mail->Sender = "suporte@intrasebraeprev.com.br"; // Seu e-mail

$mail->FromName = "Suporte Intranet SEBRAE PREVIDÊNCIA"; // Seu nome

 

// Define os destinatário(s)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->AddAddress($email, $nome);

$mail->AddAddress('suporte@intrasebraeprev.com.br');

//$mail->AddAddress('e-mail@destino2.com.br');

//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia

//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

 

// Define os dados técnicos da Mensagem

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

 

// Define a mensagem (Texto e Assunto)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->Subject  = "Recuperação de Senha"; // Assunto da mensagem

$mail->Body = $msgm;

$mail->AltBody = $msgmPlain;

 

// Define os anexos (opcional)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

 

// Envia o e-mail

$enviado = $mail->Send();

 

// Limpa os destinatários e os anexos

$mail->ClearAllRecipients();

$mail->ClearAttachments();

 

// Exibe uma mensagem de resultado

if ($enviado) {

echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#fff; background:#0C0;margin:10px 0 0 0";>Instruções para recuperação de sua senha foram enviadas para <strong>'.$email.'</strong>!</div>';

} else {

echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>Ocorreu um erro ao enviar o e-mail! Por favor tente mais tarde.</div>

';

echo "Informações do erro: 

" . $mail->ErrorInfo;

}

 

				}

			}

		}

?>

</body>

</html>
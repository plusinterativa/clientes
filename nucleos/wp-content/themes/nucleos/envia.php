<?php
//$emailsender = "atendimento@nucleos.com.br";
if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender = "atendimento@" . $_SERVER[HTTP_HOST];
} else {
        $emailsender = "atendimento@" . $_SERVER[HTTP_HOST];
} 

if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
 
// Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
$nomeremetente     = $_POST['nome'];
$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'atendimento@nucleos.com.br';
//$comcopia          = trim($_POST['comcopia']);
//$comcopiaoculta    = trim($_POST['comcopiaoculta']);
$assunto           = $_POST['assunto'] . ' | Site';
$mensagem          = '
<br/><b>Nome:</b><br/>' . $_POST['nome'] . '<br/>
<br/><b>CPF:</b><br/> ' . $_POST['cpf'] . '<br/>
<br/><b>Telefone:</b><br/> ' . $_POST['telefone'] . '<br/>
<br/><b>Celular:</b><br/> ' . $_POST['celular'] . '<br/>
<br/><b>Matr�cula:</b><br/>' . $_POST['matricula'] . '<br/>
<br/><b>Email:</b><br/>' . $_POST['email'] . '<br/>
<br/><b>Assunto:</b><br/>' . $_POST['assunto'] . '<br/>
<br/><b>Mensagem:</b><br/>' . $_POST['mensagem'] . '<br/>
';
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<p>Esse email foi enviado do site Nucleos</p>'.$mensagem;
 
/* Montando o cabe�alho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
// Perceba que a linha acima cont�m "text/html", sem essa linha, a mensagem n�o chegar� formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo s�o porque o Postfix obriga que se um cabe�alho for especificado, dever� haver um valor.
// Se n�o houver um valor, o item n�o dever� ser especificado.
if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente ser� usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);
 
/* Mostrando na tela as informa��es enviadas por e-mail */
print "<b>Mensagem enviada com sucesso!</b><br/>"
?>
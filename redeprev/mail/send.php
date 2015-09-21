<?php
$name = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$textarea = $_POST['textarea'];
$url = $_POST['url'];


$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "X-Priority: 1\n";
//$mensagemHTML =  $name . "<br/>\n" ."\r\n";
//$mensagemHTML .= $email . "<br/>\n" ."\r\n";
//$mensagemHTML = $textarea;
$titulo = $name . ' - ' . $email;
$emailsender = $assunto;
$emaildestinatario = $assunto;
if(!mail($emaildestinatario, $titulo, $textarea, $headers ,"-r".$emailsender)){
    $headers .= "Return-Path: " . $emailsender . $quebra_linha;
    mail($emaildestinatario, $titulo, $textarea, $headers );
}


if($assunto==NULL){ 
	header('location:' . $url . '?erro');
}
else{
	header('location:' . $url . '?sucesso');
}
    <?php
    $headers = "MIME-Version: 1.1\n"; 
    $headers .= "Content-type: text/html; charset=utf-8\n";  
    //$headers .= "Reply-To: jandrey.souza@plusinterativa.com\n"
    $headers .= "X-Priority: 3\n";
    $headers .= "Return-Path: " . $emailsender . $quebra_linha;
    $assunto = "ASSUNTO";
    $mensagemHTML = "enviado!!";
    $emaildestinatario = 'janssen.rodrigues@plusinterativa.com';
    $emailsender = 'janssen.rodrigues@plusinterativa.com';

    if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){
        mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
    }
        header('location:http://localhost/anabb/?la=la');

<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "jv.sena0@gmail.com";
$subject = "Contato - Programador @Jotavin";
$body = "Nome: ".$nome."\r\n"."Email: ".$email."\r\n"."Mensagem: ".$mensagem;
$header = "From:jv.sena00@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion()

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}else{
    echo("O email não pôde ser enviado.");
}

}
?>
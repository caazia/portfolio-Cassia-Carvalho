<?php
    $nome = addslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $assunto = addcslashes($_POST['assunto']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "contato.cassia.carvalho@gmail.com";
    $titulo = "Mensagem do portfolio - Contato";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Assunto: ".$assunto."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: cahcarvalh@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$titulo,$corpo,$cabeca))
    {
        echo("E-mail enviado com sucesso!");
    }
    else
    {
        echo("Houve um erro ao enviar o email. Tente novamente mais tarde!");
    }
?>
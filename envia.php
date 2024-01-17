<?php
    $nome = addslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $assunto = addcslashes($_POST['assunto']);
    $mensagem = addcslashes($_POST['mensagem']);
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    //corpo email
    $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Telefone: </b>$telefone</p>
      <p><b>Assunto: </b>$assunto</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";

  //Para onde será enviado
    $para = "contato.cassia.carvalho@gmail.com";
    $titulo = "Mensagem do portfolio - Contato";

    $cabeca = "From: cahcarvalh@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    mail($para,$titulo,$arquivo,$cabeca);
    
    echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";
    
?>
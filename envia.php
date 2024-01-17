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
  $destino = "contato.cassia.carvalho@gmail.com";
  $titulo = "Formulario Portfolio - Contato";

  //Para onde será enviado
  $cabeca  = "MIME-Version: 1.0\n";
  $cabeca .= "Content-type: text/html; charset=iso-8859-1\n";
  $cabeca .= "From: $nome <$email>";

    mail($destino,$titulo,$arquivo,$cabeca);
    
    echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";
    
?>
<?php

$to = 'emawalunga11@gmail.com';//destinatário
$assunto = 'Formulário do site';
$mensagem = $_POST['mensagem']. "-" .$_POST['nome'];

$email = $_POST['email'];//remetente

$status = mail($to, $assunto, $mensagem);

if ($status == true) {
  echo 'Mensagem enviada.!';
} else {
  echo 'Mensagem enviada.!';
}



?>
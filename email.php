<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require 'mailer/PHPMailerAutoload.php';

if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
                 $assunto = $_POST['assunto'];
      }
      if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
                 $mensagem = $_POST['mensagem'];
      }

    $email = $_POST['email'];
    $nome = $_POST['nome'];

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'itxmidia.com.br';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'suporte@itxmidia.com.br';
    $mail->Password = 'sup@2546';
    $mail->Port = 587;

    $mail->setFrom($email, 'Formulário Site- '. $nome);
    $mail->addAddress('oxirabrasil.com.br');

    $mail->isHTML(true);

    $mail->Subject = $assunto;
    $mail->Body    = nl2br($mensagem);
    $mail->AltBody = nl2br(strip_tags($mensagem));

   if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
        header('Location: index.php?enviado');
    }
   ?>
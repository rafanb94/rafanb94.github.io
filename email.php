<?php
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$email = $_POST['email'];
$nome = $_POST['nome'];

$body_content = '';
foreach( $_POST as $field => $value) {
  if( $field !== 'leaveblank' && $field !== 'dontchange' && $field !== 'enviar') {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= $field . ': ' . $value . "\n";
  }
}

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.itxmidia.com.br';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'suporte@itxmidia.com.br';                     // SMTP username
        $mail->Password   = 'sup@2546';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        //Recipients
    $mail->setFrom($email, 'Formulário Site- '. $nome);
    $mail->addAddress('suporte@itxmidia.com.br',' Massa');
    $mail->addReplyTo($email, $nome);           // Name is optional
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->WordWrap = 70;
        $mail->Subject = 'Formulário - ' . $site_name . ' - ' . $nome;
        $mail->Body = $body_content;
        $mail->send();
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
?>

  <html>
    <head>
      <title>Formulário enviado</title>
      <meta http-equiv="refresh" content="10;URL='./'">
    </head>
    <body>
      <!-- Mensagem de sucesso -->
      <div class="form-content" id="form-send">
        <h2>Formulário enviado!</h2>
        <p>Em breve eu entro em contato com você.</p>
      </div>
    </body>
  </html>

<?php } catch (Exception $e) { ?>

  <html>
    <head>
      <title>Erro no envio</title>
      <meta http-equiv="refresh" content="10;URL='./'">
    </head>
    <body>
      <!-- Mensagem de erro -->
      <div class="form-content" id="form-erro">
        <h2>Um erro ocorreu!</h2>
        <p>Você pode tentar novamente ou enviar direto para <?php echo $email_envio; ?></p>
      </div>
    </body>
  </html>

<?php
  }
?>




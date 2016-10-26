<?php


/*
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("PHPMailer/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
$_POST['name'] = 'Iohan';
$_POST['email'] = "iohangp@gmail.com";
$_POST['message'] = "Teste de mensagem";
$_POST['phone'] = "9489393";

 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {

    
     $mail->IsSMTP();        // Ativar SMTP
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Host = 'smtp.gmail.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = 'idealhub2016@gmail.com.br'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = 'maria-testadora'; // Senha do servidor SMTP (senha do email usado)
   //  $mail->SMTPSecure = "ssl";
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('noreply@gmail.com', 'iDeal Hub - Fale Conosco'); //Seu e-mail
     $mail->AddReplyTo('noreply@gmail.com', 'iDeal Hub - Fale Conosco'); //Seu e-mail
     $mail->Subject = 'Novo email de contato - iDeal HUB';//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('idealhub2016@gmail.com', 'Teste Locaweb');
     //$mail->AddAddress('iohangp@gmail.com', 'Teste Locaweb');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
     $name = strip_tags(htmlspecialchars($_POST['name']));
	 $email_address = strip_tags(htmlspecialchars($_POST['email']));
	 $phone = strip_tags(htmlspecialchars($_POST['phone']));
	 $message = strip_tags(utf8_decode($_POST['message']));
 
 	 $email_subject = "Nome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
     //Define o corpo do email
     $mail->MsgHTML($email_subject); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();

     echo "Mensagem enviada com sucesso</p>\n";
     return true;
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
     // echo'<pre>';print_r($e);
      return false;
}
*/




// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
   echo "No arguments Provided!";
   return false;
}
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
// Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to      = 'idealhub2016@gmail.com';
$email_subject = "Novo email de contato - iDeal HUB";
$email_body = "Nome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
$headers = "From: idealhub2016@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

$headers = 'From: iDealHub@idealhub.com.br' . "\r\n" .
    'Reply-To: iDealHub@idealhub.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
                                                                 
    mail($to, $email_subject, $email_body, $headers);

return true; 
?>

<?php

require_once APP . '/Libraries/PHPMailer.php';
require_once APP . '/Libraries/Exception.php';
require_once APP . '/Libraries/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{

    public static function EnviarEmailCliente($nome, $emailRemetente, $area)
    {

        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->IsSMTP(); // enable SMTP
            // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = HOST_EMAIL;
            $mail->Username = USER_EMAIL_NOREPLY;
            $mail->Password = USER_PASS_EMAIL;
            $mail->Port = 465; // or 587

            //Recipients
            $mail->setFrom(USER_EMAIL_NOREPLY, $area);
            $mail->addAddress($emailRemetente, $nome);     //Add a recipient

            //Content
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject =  'Contato';
            $body = file_get_contents(APP . '/Views/painel/templateEmailCliente.html');
            $mail->Body    = $body;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public static function EnviarEmailInterno($nome, $emailRemetente, $telefone, $emailEscolhidoDestinatario, $assunto, $mensagem, $area, $flagEnviaCopia)
    {

        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->IsSMTP(); // enable SMTP
            // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = HOST_EMAIL;
            $mail->Username = USER_EMAIL_NOREPLY;
            $mail->Password = USER_PASS_EMAIL;
            $mail->Port = 465; // or 587

            //Recipients
            $mail->setFrom(USER_EMAIL_NOREPLY, $area);
            $mail->addAddress($emailEscolhidoDestinatario, $nome);     //Add a recipient
            if($flagEnviaCopia){
                $mail->addAddress($emailRemetente, $nome);
            }

            //Content
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject =  $assunto;
            $body = "<b>Nome cliente:</b> $nome <br> 
                    <b>Email cliente:</b> $emailRemetente <br>
                    <b>Telefone:</b> $telefone <br>
                    <b>Assunto:</b> $assunto <br>
                    <b>Mensagem:</b> $mensagem";
            $mail->Body    = $body;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

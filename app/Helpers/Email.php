<?php

require_once APP . '/Libraries/PHPMailer.php';
require_once APP . '/Libraries/Exception.php';
require_once APP . '/Libraries/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{

    public static function EnviarEmail($nome, $emailRemetente, $telefone, $emailEscolhidoDestinatario, $assunto, $mensagem, $area)
    {

        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->IsSMTP(); // enable SMTP
            // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = HOST_EMAIL;
            $mail->Username = USER_EMAIL;
            $mail->Password = USER_PASS_EMAIL;
            $mail->Port = 465; // or 587

            //Recipients
            $mail->setFrom($emailRemetente, $area);
            $mail->addAddress($emailEscolhidoDestinatario, $nome);     //Add a recipient


            //Content
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject =  $assunto;
            $mail->Body    = $mensagem;
            // $mail->AltBody = "Olá, email teste Teste - corpo.\n Texto segunda linha";

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

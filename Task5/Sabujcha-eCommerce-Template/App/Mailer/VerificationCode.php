<?php

namespace App\Mailer;

use App\Mailer\Mail;
use App\Mailer\MailModels\Mailer;
use PHPMailer\PHPMailer\Exception;



class VerificationCode extends Mail implements Mailer
{


    function send()
    {

        try {
            $this->mail->setFrom('ecommerce.dashboard2022@gmail.com', 'Ecommerce Dashboard');
            $this->mail->addAddress($this->mailTo );
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = $this->subject;
            $this->mail->Body    = $this->body;
            $this->mail->send();
            return true;

        } catch (Exception $e) {
            return false; 
        }
    }
}

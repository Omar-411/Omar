<?php

namespace App\Mailer;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;


abstract class Mail{
    protected PHPMailer $mail;
    protected  $mailTo;
    // protected  $recieverName;
    protected  $body;
    protected  $subject;
    public function __construct(string $mailTo,string $subject,string $body )
    {
        $this->mailTo=$mailTo;
        // $this->recieverName=$recieverName;
        $this->body=$body;
        $this->subject=$subject;
        $this->mail = new PHPMailer(true);

        $this->mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->mail->Username   = 'ecommerce.dashboard2022@gmail.com';                     //SMTP username
        $this->mail->Password   = '43494955_oG';                               //SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $this->mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    }
    public abstract function send();
}
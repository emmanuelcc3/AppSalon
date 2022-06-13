<?php
  namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

  class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {

       $this->email = $email;
       $this->nombre = $nombre;
       $this->token = $token;
    }

    public function enviarConfirmacion(){
        //Crear el objecto de email
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = 'smtp.mailtrap.io';
         $mail->SMTPAuth = true;
         $mail->Port = 2525;
         $mail->Username = '5d0186a7da3322';
         $mail->Password = 'e1d40a50d5d4eb';

         $mail->setFrom('cuentas@appsalon.com');
         $mail->addAddress('cuentas@appsalon.com','AppSalon.com');
         $mail->Subject = 'Confirma tu cuenta';

         //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

         $contenido = "<html>";
         $contenido .= "<p><strong>Hola" . $this->nombre . "</strongp>Has creado tu cuenta en AppSalon,
         solo debes confirmarla presionando el siguiente enlace</p>";
         $contenido .= "<p>Preciona aqui: <a href='http://localhost:3000/confirmar-cuenta?token="
         . $this->token . "'>CONFIRMAR CUENTA</a></p>";
         $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este correo</p>";
         $contenido .= "</html>";
         $mail->Body = $contenido;

         //Enviar el mail
         $mail->send();

    }

    public function enviarInstrucciones(){
       //Crear el objecto de email
       $mail = new PHPMailer();
       $mail->isSMTP();
       $mail->Host = 'smtp.mailtrap.io';
       $mail->SMTPAuth = true;
       $mail->Port = 2525;
       $mail->Username = '5d0186a7da3322';
       $mail->Password = 'e1d40a50d5d4eb';

       $mail->setFrom('cuentas@appsalon.com');
       $mail->addAddress('cuentas@appsalon.com','AppSalon.com');
       $mail->Subject = 'Restablecer tu password';

       //Set HTML
      $mail->isHTML(TRUE);
      $mail->CharSet = 'UTF-8';

       $contenido = "<html>";
       $contenido .= "<p><strong>Hola " . $this->nombre . "</strongp> Deseas cambiar el password dale click al siguiente enlace</p>";
       $contenido .= "<p>Preciona aqui: <a href='http://localhost:3000/recuperar?token="
       . $this->token . "'>Restablecer password</a></p>";
       $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este correo</p>";
       $contenido .= "</html>";
       $mail->Body = $contenido;

       //Enviar el mail
       $mail->send();

    }

  }

?>
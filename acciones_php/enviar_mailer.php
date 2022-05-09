<?php

include "../phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'gabo99prueba@gmail.com';   
$mail->Password = '08Octagps';  

$mail->setFrom('gabo99prueba@gmail.com', 'Crossfit +Power');
$mail->addAddress('angelpiste55@gmail.com', $_POST['cliente']);     // Add a recipient
$mail->addReplyTo('gabo99prueba@gmail.com', 'Crossfit +Power');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por:'.$_POST['cliente'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['cliente'].'<br><b>Email: </b>'.$_POST['correo'].'<br><b>Celular: </b>'.$_POST['numero'].'<br><b>Comentarios: </b>'.$_POST['comentario'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="../contactanos.php";
    </script>
  ';
  include "guardarComentarios.php";
}

?>
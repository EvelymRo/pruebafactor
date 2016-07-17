<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre;
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['msg'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'evelym.digital@gmail.com';
$asunto = 'Contacto desde fondadelfactor.mx';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
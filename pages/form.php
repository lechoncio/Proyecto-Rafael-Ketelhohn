<?php

$edad = $_POST["gridRadios"];
$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$comentarios = $_POST["comentarios"];
$pdf = $_POST["pdf"];

$mensaje = "Este mensaje fué enviado por:" . $nombre . ",\r\n";
$mensaje .= "Su email es:" . $mail . "\r\n";
$mensaje .= "Edad:" . $edad . "\r\n";
$mensaje .= "Mensaje:" . $_POST["comentarios"] . "\r\n";
$mensaje .= "Enviado el:" . date("d/m/y", time());

$para = "rafaelk@gmail.com";
$asunto = "Mail de Segway"

mail($para, $asunto, $mensaje, $header);
header("Location:senia.html")

?>

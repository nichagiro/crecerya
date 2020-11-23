<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$phone = $_POST['phone'];

$to = 'nicolaschamorro@cisde.co';
$subject = 'Mensaje desde pagina web';
$message = "Nombre: $name"."Telefono: $phone"."\nMensaje: $msg";

$headers = "From:".$_POST['email'];

mail($to, $subject, $message, $headers);

header('location:/');


?>


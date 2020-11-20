<?php

$name = $_POST['name'];
$msg = $_POST['msg'];

$to = $_POST['email'];
$subject = 'Mensaje desde pagina web';
$message = "Nombre: $name"."\nMensaje: $msg";

$headers = "From: osmel@maquillaje.biz";

mail($to, $subject, $message, $headers);

header('location:index.html');


?>
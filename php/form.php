<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$phone = $_POST['phone'];
$email = $_POST['email'];


if($name == '' | $msg == '' | $phone == '' | $email == ''){

    echo json_encode ('error');

} else {

    // $to = 'elpoetaoga@creceresya.com';
    // $subject = 'Mensaje desde pagina web';
    // $message = "Nombre: $name"."\nTelefono: $phone"."\nMensaje: $msg";

    // $headers = "From:".$email;

    // mail($to, $subject, $message, $headers);

    echo json_encode ('ok');

}



?>


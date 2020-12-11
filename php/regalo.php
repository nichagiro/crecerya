<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


if($name == '' | $email == ''){

    echo json_encode ('error');

} else {

    // $to = 'elpoetaoga@creceresya.com';
    // $to = 'nicolaschamorro@cisde.co';
    // $subject = 'subscripción pagina web';
    // $message = "Nombre: $name".
    //             "\nTelefono: $phone".
    //             "\nSubscipcion desde la pagina web creceresya.com";

    // $headers = "From:".$email;

    // mail($to, $subject, $message, $headers);

    echo json_encode ('ok');

}






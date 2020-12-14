<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


if($name == '' | $email == ''){

    echo json_encode ('error');

} else {

    if($phone == ''){

        $phone = 'No suministro el telefono';
        
    }

    $to = 'elpoetaoga@creceresya.com';
    $subject = 'Nuevo Suscritor';
    $message = "Nombre: $name".
                "\nCorreo: $email".
                "\nTelefono: $phone";

    $headers = "From:".$email;

    mail($to, $subject, $message, $headers);

    echo json_encode ('ok');

}

?>








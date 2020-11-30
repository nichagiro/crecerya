<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$phone = $_POST['phone'];

if($name == '' | $msg == '' | $phone == '' | $_POST['email'] == ''){

    echo json_encode ('error');

} else {

    // $to = 'elpoetaoga@ccreceresya.com';
    // $subject = 'Mensaje desde pagina web';
    // $message = "Nombre: $name"."\nTelefono: $phone"."\nMensaje: $msg";

    // $headers = "From:".$_POST['email'];

    // mail($to, $subject, $message, $headers);

    echo json_encode ('ok');

}



?>


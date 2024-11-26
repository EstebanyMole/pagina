<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $tema = $_POST['tema'];
    $mensaje = $_POST['mensaje'];
    $fecha = $_POST['fecha'];
    $medio = $_POST['medio'];

    $to = "meloleonesteban@gmail.com"; 
    $subject = "Nuevo mensaje desde el formulario web";
    $body = "
    Nombre: $nombre\n
    Correo Electrónico: $email\n
    Teléfono: $telefono\n
    Tema de la consulta: $tema\n
    Mensaje: $mensaje\n
    Fecha de contacto preferida: $fecha\n
    Medio de contacto preferido: $medio\n
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "¡Tu mensaje ha sido enviado con éxito!";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.";
    }
}
?>

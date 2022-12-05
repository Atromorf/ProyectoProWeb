<?php
    $destinatario = '120036794@upq.edu.mx';

    $nombre = $_POST['txtNombre'];
    $correo = $_POST['txtCorreo'];
    $mensaje = $_POST['txtMensaje'];
    $asunto = $_POST['txtAsunto'];

    $header = "Enviado desde la pagina oficial de Weirdo Comics";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='/AdminU'\",1000)</script>";


?>
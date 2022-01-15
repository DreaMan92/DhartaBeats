<?php
    $destino = "dhartabeats@gmail.com";
    $nombre = $_POST["NOMBRE"];
    $correo = $_POST["CORREO"];
    $telefono = $_POST["TELEFONO"];
    $asunto = $_POST["ASUNTO"];
    $mensaje = $_POST["MENSAJE"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nAsunto: " . $asunto ."\nMensaje: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:CONTACTO-MensajeEnviado.html")

?>
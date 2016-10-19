<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "contacto@brisaverde.cl"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: Sitio Web\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto";
$cuerpo = "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
$cuerpo .= "Mensaje: ".$mensaje;
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:

    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
    echo '<script>history.go(-1);
    </script>';
?>
<?php
//Importamos las variables del formulario de contacto
@$name = addslashes($_POST['name']);
@$email = addslashes($_POST['email']);
@$phone = addslashes($_POST['phone']);
@$message = addslashes($_POST['message']);

//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Cotizacion Programa Emprendedor - REBBEL"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "info@rebbel.co"; //cambiar por tu email
$contenido = "$name ha enviado un mensaje desde la web rebbel.co\n"
. "\n"
. "Nombre: $name\n"
. "Email: $email\n"
. "Telefono: $phone\n"
. "Mensaje: $message\n"
. "\n";

//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
	exit("<h1 style='text-align: center; margin-top: 1em; line-height: 1.2em; color: rgb(54, 54, 54); font-family: Arial, sans-serif;'>Gracias tu mensaje ha sido enviado exitosamente</h1>" . "<div style='text-align: center; margin-top: 2em;'><a href='http://rebbel.co' style='text-decoration: none; padding: 1em; border: 2px solid rgb(54, 54, 54); color: rgb(54, 54, 54); font-weight: bold;'>Volver al Inicio</a></div>");
} else {
	//Si el mensaje no se envía muestra el mensaje de error
	exit("Error: Su información no pudo ser enviada, intente más tarde");
}
?>
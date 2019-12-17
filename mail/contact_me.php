<?php
// Verifica si hay campos vacíos
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No hay argunmentos proporcionados!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Crea el correo electrónico y envía el mensaje
$to = 'hectorgomezsoria@gmail.com'; //Aquí es donde el formulario enviará un mensaje.
$email_subject = "HRESERVER-Contacto de:  $name";
$email_body = "Recibió un nuevo mensaje del formulario de contacto HRESERVER.\n\n"."Here are the details:\n\nNombre: $name\n\nEmail: $email_address\n\nTeléfono: $phone\n\nMensaje:\n$message";
$headers = "From: noreply@hreserver.com\n"; // Esta es la dirección de correo electrónico desde la que se generará el mensaje.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
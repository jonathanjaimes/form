<!DOCTYPE html>
<html>
<head>
	<title>Formulario de contacto - Mensaje Enviado</title>
</head>
<body>

	<?php 
$myemail = 'jonathanguillermojm@ufps.edu.co';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

	<form action="enviar.php" method="post">
		<input type="text" name="nombre" placeholder="NOMBRE">
		<input type="email" name="email" placeholder="CORREO">
		<textarea name="mensaje" type="text" placeholder="MENSAJE"></textarea>
		<input type="submit" value="ENVIAR">
	</form>
</body>
</html>
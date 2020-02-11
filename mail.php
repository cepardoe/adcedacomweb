<?php

if(isset($_POST['sendContacto'])) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$mail = $_POST['mail'];
	$tel = $_POST['telefono'];
	$empleados = $_POST['cantidadEmpleados'];
	$producto = $_POST['productoRequerido'];
	$msg = $_POST['mensaje'];
	$tabla = $nombre .' '. $apellido .' '. $mail .' '. $tel .' '. $empleados .' '. $producto .' '. $msg;   
	mail('davidnavarrorolon@gmail.com', "Solicitud Página Web", $tabla); 
}

if(isset($_POST['mailSus'])) {
	$mailsus = $_POST['suscripcion'];
	mail('davidnavarrorolon@gmail.com', "Solicitud Suscripción", $mailsus);
}

?>  

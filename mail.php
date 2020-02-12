<?php

// conexion db
$mysqli = new mysqli("database-1.cmlpaj0d1yqv.us-east-2.rds.amazonaws.com", "admin", "Adceda2020", "web_page");

if(isset($_POST['sendContacto'])) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$mail = $_POST['mail'];
	$tel = $_POST['telefono'];
	$empleados = $_POST['cantidadEmpleados'];
	$producto = $_POST['productoRequerido'];
	$msg = $_POST['mensaje'];
	$tabla = $nombre .' - '. $apellido .' - '. $mail .' - '. $tel .' - '. $empleados .' - '. $producto .' - '. $msg;   
	//envío correo
	mail('mercadeoyventas@adceda.com.co', "Solicitud de Software", $tabla); 
	// insercion db
	$insert = $mysqli->query("INSERT INTO clientes (nombre, apellido, mail, telefono, empleados, producto, mensaje) VALUES ('$nombre', '$apellido', '$mail', '$tel', '$empleados', '$producto', '$msg')");
}

if(isset($_POST['mailSus'])) {
	$mailsus = $_POST['suscripcion'];
	// envío correo
	mail('mercadeoyventas@adceda.com.co', "Solicitud de Suscripción", $mailsus);
	// insercion db
	$insert = $mysqli->query("INSERT INTO suscriptores (correo) VALUES ('$mailsus')");
}

?>  

<?php
    header('Access-Control-Allow-Origin: *');
 
    if(isset($_POST['sendContacto'])) {
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $tel = $_POST['telefono'];
        $empleados = $_POST['cantidadEmpleados'];
        $producto = $_POST['productoRequerido'];
        $msg = $_POST['mensaje'];
        $tabla = $nombre .' '. $apellido .' '. $mail .' '. $tel .' '. $empleados .' '. $producto .' '. $msg;   
        
        mail('mercadeoyventas@adceda.com.co', "Solicitud Página Web", $tabla, $mail);
    }
    if(isset($_POST['sendSuscripcion'])) { 
        
        $mailsus = $_POST['suscripcion'];

        mail('davidnavarrorolon@gmail.com', "Solicitud Suscripción", $mailsus);
    }
?>  

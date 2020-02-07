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
        /*'<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <h2>Adceda</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            $nombre $apellido
                        </td>
                        <td>
                            $tel
                        </td>
                        <td>
                            $empleados $producto
                        </td>
                    </tr>
                    <tr>
                        <td>
                            $msg
                        </td>  
                    </tr>
                   </table>'; */

        mail('mercadeoyventas@adceda.com.co', "Solicitud Página Web", $tabla, $mail);
    }
    if(isset($_POST['sendSuscripcion'])) { 
        $mailsus = $_POST['suscripcion'];

        mail('mercadeoyventas@adceda.com.co', "Solicitud Suscripción", $mailsus);
    }
?>  

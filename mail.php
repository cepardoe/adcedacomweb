<?php
 
    if(isset($_POST['send'])) {
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $msg = $nombre . "" . $apellido;

        mail('mercadeoyventas@adceda.com.co', "Solicitud Página Web", $msg, $mail);

        echo 'Enviado';
    }
?>  

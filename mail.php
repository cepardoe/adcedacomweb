<?php
 
if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $msg = $nombre . "" . $apellido . "";

    mail($mail, "Prueba mail", $msg);
}
?>  
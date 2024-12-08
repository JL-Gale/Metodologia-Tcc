<?php
    include("conexion.php");
    if (isset($_POST['send'])) {
        if (
        strlen($_POST['nameContact']) >= 1 && 
        strlen($_POST['emailContact']) >= 1 && 
        strlen($_POST['messageContact']) >= 1
        ) {
        $name = trim($_POST['nameContact']);
        $phone = trim($_POST['emailContact']);
        $message = trim($_POST['messageContact']);
        $consulta = "INSERT INTO datoscontacto(nombreContacto, emailContacto, mensajeContacto) VALUES ('$name', '$phone', '$message')";
        $resultado = mysqli_query($conex, $consulta);
        }
    }
?>
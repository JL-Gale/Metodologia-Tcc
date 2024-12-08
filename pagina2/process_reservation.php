<?php
    include("conexion.php");
    if (isset($_POST['send'])) {
        if (
        strlen($_POST['name']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['date']) >= 1 &&
        strlen($_POST['time']) >= 1 &&
        strlen($_POST['message']) >= 1
        ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $date = trim($_POST['date']);
        $time = trim($_POST['time']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO reservaciones(name, email, phone, date, time, message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$message')";
        $resultado = mysqli_query($conex, $consulta);
        }
    }
?>


<?php
    session_start();
    if ($_POST['txtUsuario'] == 'Janice' and $_POST['txtPassword'] == '12345678')
        $_SESSION['admin'] = $_POST['txtUsuario'];
    else
        $_SESSION['error'] = 'Usuario incorrecto';
    header('location:index.php');
?>
<?php
session_start();    
include_once '../../includes/password.inc';
//Creamos una sesion para el usuario solo si los datos estan correctos

$username = $_POST['username'];
$password = $_POST['password'];


if($username == $admin_name && $password == $admin_password){
    $_SESSION['loggedin'] = true;    
    $_SESSION['mensaje'] = "Bienvenido";        
}else{    
    $_SESSION['loggedin'] = false;    
    $_SESSION['error'] = "Nombre de usuario o contraseña incorrecta";
}
header('Location: ../index.php');
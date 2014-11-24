<?php
session_start();
if (!$_SESSION['loggedin'])
{
    $_SESSION['error'] = "Inicia sesion";
    header('Location: ../index.php');
}
include ("../../includes/config.php");

$archivo = fopen("../../revista/mes.txt", "w") or die("Unable to open file!");

$txt = $_POST['mes'];
fwrite($archivo, $txt);
fclose($archivo);

$_SESSION['mensaje'] = "Actualizado con exito";
header('Location: index.php');
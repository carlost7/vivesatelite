<?php
session_start();
if (!$_SESSION['loggedin'])
{
      $_SESSION['error'] = "Inicia sesion";
      header("Location ../index.php");
}
include ("../../includes/config.php");


$id = $_POST['id'];
$query = "delete from clientes where id = $id";
if (mysql_query($query, $db_conexion))
{
      $query = "delete from directorio where id_cliente = $id";
      if (mysql_query($query, $db_conexion))
      {
            $_SESSION['mensaje'] = "Cliente eliminado con exito";
            header('Location: clientes.php');
      }else{
            print_r(mysql_error());
      }
}
else
{
      $_SESSION['error'] = "error al guardar en la base de datos";
      header('Location: clientes.php');
}

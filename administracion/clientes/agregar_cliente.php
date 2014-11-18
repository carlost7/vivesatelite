<?php

session_start();
if (!$_SESSION['loggedin'])
{
    $_SESSION['error'] = "Inicia sesion";
    header("location ../index.php");
}
include ("../../includes/config.php");

$Nombre     = htmlentities($_POST["Nombre"], ENT_QUOTES, 'UTF-8');
$Direccion  = htmlentities($_POST["Direccion"], ENT_QUOTES, 'UTF-8');
$Telefono   = htmlentities($_POST["Telefono"], ENT_QUOTES, 'UTF-8');
$e_mail     = htmlentities($_POST["e_mail"], ENT_QUOTES, 'UTF-8');
$Link       = htmlentities($_POST["Link"], ENT_QUOTES, 'UTF-8');
$lat        = htmlentities($_POST["lat"], ENT_QUOTES, 'UTF-8');
$lng        = htmlentities($_POST["lng"], ENT_QUOTES, 'UTF-8');
$twitter    = htmlentities($_POST["twitter"], ENT_QUOTES, 'UTF-8');
$facebook   = htmlentities($_POST["facebook"], ENT_QUOTES, 'UTF-8');
$pagina_web = htmlentities($_POST["pagina_web"], ENT_QUOTES, 'UTF-8');
$Imagen     = $Nombre . ".jpg";
$Servicios  = htmlentities($_POST["Servicios"], ENT_QUOTES, 'UTF-8');
$Descuento  = $Nombre . ".jpg";

$query = "Insert into clientes set ";

if ($Nombre != "")
{    
    $query = $query . "Nombre = '" . $Nombre . "'";
}else{
    $_SESSION['error'] = "Es necesario el nombre del cliente";
    header('Location: clientes.php');    
}

if ($Direccion != "")
{
    $query = $query . ", Direccion = '" . $Direccion . "'";
}
if ($Telefono != "")
{
    $query = $query . ", Telefono = '" . $Telefono . "'";
}
if ($e_mail != "")
{
    $query = $query . ", e_mail = '" . $e_mail . "'";
}
if ($Link != "")
{
    $query = $query . ", Link = '" . $Link . "'";
}
if ($lat != "")
{
    $query = $query . ", lat = '" . $lat . "'";
}
if ($lng != "")
{
    $query = $query . ", lng = '" . $lng . "'";
}
if ($twitter != "")
{
    $query = $query . ", twitter = '" . $twitter . "'";
}
if ($facebook != "")
{
    $query = $query . ", facebook = '" . $facebook . "'";
}
if ($pagina_web != "")
{
    $query = $query . ", pagina_web = '" . $pagina_web . "'";
}
if ($Imagen != "")
{
    $query = $query . ", Imagen = '" . $Imagen . "'";
}
if ($Servicios != "")
{
    $query = $query . ", Servicios = '" . $Servicios . "'";
}
if ($Descuento != "")
{
    $query = $query . ", Descuento = '" . $Descuento . "'";
}

if(mysql_query($query, $db_conexion) ){
    $id = mysql_insert_id($db_conexion);
    echo $id;    
}else{
    echo "error al guardar en la base de datos";
}

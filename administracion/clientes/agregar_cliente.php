<?php

session_start();
if (!$_SESSION['loggedin'])
{
      $_SESSION['error'] = "Inicia sesion";
      header("Location ../index.php");
      
}
include ("../../includes/config.php");

$Nombre = htmlentities($_POST['Nombre'], ENT_QUOTES, 'UTF-8');
$Direccion = htmlentities($_POST['Direccion'], ENT_QUOTES, 'UTF-8');
$Telefono = htmlentities($_POST['Telefono'], ENT_QUOTES, 'UTF-8');
$e_mail = htmlentities($_POST['e_mail'], ENT_QUOTES, 'UTF-8');
$Link = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower(htmlentities($_POST['Link'], ENT_QUOTES, 'UTF-8'))), '-') . ".jpg";
$lat = htmlentities($_POST['lat'], ENT_QUOTES, 'UTF-8');
$lng = htmlentities($_POST['lng'], ENT_QUOTES, 'UTF-8');
$twitter = htmlentities($_POST['twitter'], ENT_QUOTES, 'UTF-8');
$facebook = htmlentities($_POST['facebook'], ENT_QUOTES, 'UTF-8');
$pagina_web = htmlentities($_POST['pagina_web'], ENT_QUOTES, 'UTF-8');
$Imagen = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower(htmlentities($_POST['Nombre'], ENT_QUOTES, 'UTF-8'))), '-') . ".jpg";
$Servicios = htmlentities($_POST['Servicios'], ENT_QUOTES, 'UTF-8');
$Descuento = htmlentities($_POST['Descuento'], ENT_QUOTES, 'UTF-8');
$categoria = htmlentities($_POST['categoria'], ENT_QUOTES, 'UTF-8');
$subcategoria = htmlentities($_POST['subcategoria'], ENT_QUOTES, 'UTF-8');

if ($Nombre == "")
{
      $_SESSION['error'] = "Es necesario al menos el nombre del negocio";
      header('Location: clientes.php');
}

$query = "insert into clientes set Nombre = '" . $Nombre . "', status = 1 ";

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

if ($categoria == "")
{
      $categoria = 0;
}

if ($subcategoria == "")
{
      $subcategoria = 0;
}


$logos = "../../logos/";
$link = "../../clientes/";
$archivo_link = $link . $Link;
$archivo_logo = $logos . $Imagen;
$uploadOk = 1;
$tipolink = pathinfo($archivo_link, PATHINFO_EXTENSION);
$tipologo = pathinfo($archivo_logo, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
$check_link = getimagesize($_FILES["Link"]["tmp_name"]);
$check_logo = getimagesize($_FILES["Imagen"]["tmp_name"]);
if ($check_descuento !== false || $check_logo !== false)
{
      $uploadOk = 1;
}
else
{
      $_SESSION['error'] = "Los archivos deben ser imagenes jpg.";
      $uploadOk = 0;
}

// Check if file already exists
if (file_exists($archivo_link) || file_exists($archivo_logo))
{
      $_SESSION['error'] = "El archivo ya existe.";
      $uploadOk = 0;
}

// Allow certain file formats
if ($tipolink != "jpg" || $tipologo != "jpg")
{
      $_SESSION['error'] = "Solo se permiten archivos jpg.";
      $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)
{
      header('Location: clientes.php');
      exit();
// if everything is ok, try to upload file
}
else
{
      if (move_uploaded_file($_FILES["Link"]["tmp_name"], $archivo_link) && move_uploaded_file($_FILES['Imagen']['tmp_name'], $archivo_logo))
      {
            if (mysql_query($query, $db_conexion))
            {
                  $id = mysql_insert_id($db_conexion);
                  $query = "insert into directorio set id_cliente = " . $id . ", id_categoria = " . $categoria . ", id_subcategoria = " . $subcategoria . ", status = 1";
                  if (mysql_query($query, $db_conexion))
                  {

                        $_SESSION['mensaje'] = "Cliente guardado con exito";
                        header('Location: clientes.php');
                  }
                  else
                  {
                        $_SESSION['error'] = "error al guardar en la base de datos";
                        header('Location: clientes.php');
                  }
            }
            else
            {
                  $_SESSION['error'] = "error al guardar en la base de datos";
                  header('Location: clientes.php');
            }
      }
      else
      {
            print_r("error");
            //$_SESSION['error'] = "No se pudo subir el archivo.";
            /*header('Location: clientes.php');
            exit();*/
      }
}


<?php

session_start();
if (!$_SESSION['loggedin'])
{
      $_SESSION['error'] = "Inicia sesion";
      header('Location: ../index.php');
}

$storeFolder = '../../galeria/';   //2

$files = glob($storeFolder."*"); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}

$_SESSION['mensaje'] = "archivos eliminados, ahora puedes subir los nuevos archivos";

header('Location: index.php');
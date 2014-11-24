<?php

session_start();
if (!$_SESSION['loggedin'])
{
      $_SESSION['error'] = "Inicia sesion";
      header('Location: ../index.php');
}

$storeFolder = '../../revista/imgs_revista_mes/';   //2

if (!empty($_FILES))
{

      $tempFile = $_FILES['file']['tmp_name'];          //3             
      
      $targetPath = $storeFolder;  //4

      $targetFile = $targetPath . $_FILES['file']['name'];  //5

      move_uploaded_file($tempFile, $targetFile); //6
}
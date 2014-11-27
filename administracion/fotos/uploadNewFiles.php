<?php

session_start();
if (!$_SESSION['loggedin'])
{
      $_SESSION['error'] = "Inicia sesion";
      header('Location: ../index.php');
}

$storeFolder = '../../fotos/' . $_POST['year'] . '/' . $_POST['mes'] . "/";

if (!empty($_FILES))
{

      $tempFile = $_FILES['file']['tmp_name'];          //3             

      $targetPath = $storeFolder;  //4

      if (!file_exists($targetPath))
      {
            if (!mkdir($targetPath, 0777, true))
            {
                  $error = error_get_last();
                  echo $error['message'];
            }
      }

      $targetFile = $targetPath . $_FILES['file']['name'];  //5

      move_uploaded_file($tempFile, $targetFile); //6
}
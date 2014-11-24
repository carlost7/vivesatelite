<?php
session_start();

if (!$_SESSION['loggedin'])
{
      $_SESSION['error'] = "Inicia sesion";
      header('Location: ../index.php');
}
include ("../../includes/config.php");
?>
<html>
    <head>
        <title>Galeria</title>
        <meta http-equiv="Content-Type" content="text/html" charset=UTF-8" />
        <link href="../../css/admin.css" rel="stylesheet" type="text/css" />
        <link href="../css/dropzone.css" type="text/css" rel="stylesheet" />
        <script src="../js/dropzone.js"></script>
    </head>
    <body>
        <div class="container">
            <?php
            include "../layout/menu.php";
            ?>
            <div class="titulo">
                <h1>Galeria</h1>
            </div>
            <div class="add_new_magazine">
                <?php include "../layout/session_messages.php"; ?>
                <div class="delete_files">
                    <h2>Eliminar fotos antiguas</h2>
                    <form method="post" action="deleteFiles.php">
                        <input type="submit" value="eliminar">
                    </form>
                </div>
                <div class="upload_files">
                    <h2>Subir archivos para la nueva galeria</h2>
                    <form action="uploadNewFiles.php" class="dropzone"></form>
                </div>
            </div>
    </body>
</html>

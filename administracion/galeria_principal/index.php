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
    <script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-29633533-27', 'auto');   ga('send', 'pageview');  </script> </head>
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

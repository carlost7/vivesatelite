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
        <title>Revistas anteriores</title>
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
                <h1>Revistas anteriores</h1>
            </div>
            <div class="add_magazine">
                <?php include "../layout/session_messages.php"; ?>
                <div class="upload_files">
                    <h2>Subir archivos para las revistas anteriores</h2>
                    <form action="uploadNewFiles.php" class="dropzone">
                        <label for="mes">Mes</label>
                        <select name="mes">
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                        <label for="year">Año</label>
                        <select name="year">
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015" selected="selected">2015</option>
                            <option value="2016">2016</option>
                        </select>
                    </form>
                </div>
            </div>
    </body>
</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Vive Satelite Administración</title>
        <link href="../css/admin.css" rel="stylesheet" type="text/css" />
    <script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-29633533-27', 'auto');   ga('send', 'pageview');  </script> </head>
    <body>
        
        <?php include "layout/session_messages.php"; ?>        
        <?php
        if ($_SESSION['loggedin'])
        {
            ?>      
            <?php
            include "layout/menu.php";
            ?>
            <ul>
                <li>
                    <a href="clientes/clientes.php">Clientes</a>
                </li>
                <li>
                    <a href="revista/index.php">Revista actual</a>
                </li>
                <li>
                    <a href="revista_anterior/index.php">Revistas anteriores</a>
                </li>
                <li>
                    <a href="fotos/index.php">Fotos</a>
                </li>
                <li>
                    <a href="galeria_principal/index.php">Galeria (Pag. principal)</a>
                </li>
            </ul>
            <?php
        }
        else
        {
            ?>           
            <h2>Entrar</h2>
            <form method="post" action="admin/enteradmin.php">
                <ul>
                    <li><label for="username">Nombre de usuario</label><input type="text" name="username" value=""></li>
                    <li><label for="username">Password</label><input type="password" name="password" value=""></li>
                    <li><input type="submit" name="Entrar" value="entrar"></li>
                </ul>
            </form>        
            <?php
        }
        ?>


    </body>
</html>

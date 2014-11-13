<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Vive Satelite Administración</title>
        <link href="../css/admin.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php session_start(); ?>
        <?php include "session_messages.php"; ?>        
        <?php
        if ($_SESSION['loggedin'])
        {
            ?>      
            <?php
            include "menu.php";
            ?>
            <ul>
                <li>
                    <a href="clientes/clientes.php">Clientes</a>
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

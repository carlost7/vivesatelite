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
        <title>Revista actual</title>
        <meta http-equiv="Content-Type" content="text/html" charset=UTF-8" />
        <link href="../../css/admin.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <?php
            include "../layout/menu.php";
            ?>
            <div class="titulo">
                <h1>Revista actual</h1>
            </div>
            <div class="add_client">
                <h2>Actualizar mes</h2>
                <?php include "../layout/session_messages.php"; ?>
                <div class="formulario">
                    <form method="post" action="actualizar_mes.php" enctype="multipart/form-data">
                        
                            <input type="text" name="mes" value="<?php include "../../revista/mes.txt"; ?>" />
                            <input type="submit" value="modificar" name="agregar">
                        
                    </form>
                </div>
            </div>
    </body>
</html>

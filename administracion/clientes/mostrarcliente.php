<?php
session_start();
if (!$_SESSION['loggedin'])
{
    $_SESSION['error'] = "Inicia sesion";
    header("location ../index.php");
}
include ("../../includes/config.php");


?>
<html>
    <head>
        <title>Clientes</title>
        <link href="/css/admin.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <?php 
                include "menu.php";
            ?>
            <div class="titulo">
                <h1>Clientes</h1>
            </div>
            <div class="add_client">
                <h2>Agregar un nuevo cliente</h2>

            </div>
            <div class="client_list">
                <h2>Lista de clientes</h2>
                <table>
                    <tr>
                        <th>Nombre</th>                        
                        <th>Eliminar</th>
                    </tr>
                    <?php
                    $query_directorio        = "select ID,Nombre from clientes order by clientes.Nombre";
                    $query_result_directorio = mysql_query($query_directorio, $db_conexion) or die(mysql_error());
                    while ($row_directorio          = mysql_fetch_assoc($query_result_directorio)) {
                        ?>
                        <tr>
                            
                            <td><a href="mostrarclientes.php?id=<?php echo $row_directorio['ID']; ?>"><?php echo $row_directorio['Nombre']; ?></a></td>
                            <td><?php echo $row_directorio['ID']; ?></td>                            
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>

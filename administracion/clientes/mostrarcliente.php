<?php
session_start();
if (!$_SESSION['loggedin'])
{
    $_SESSION['error'] = "Inicia sesion";
    header("Location ../index.php");
}
include ("../../includes/config.php");


?>
<html>
    <head>
        <title>Clientes</title>
        <link href="/css/admin.css" rel="stylesheet" type="text/css" />
    <script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-29633533-27', 'auto');   ga('send', 'pageview');  </script> </head>
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
                    $query_directorio        = "select * from clientes order by clientes.Nombre";
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

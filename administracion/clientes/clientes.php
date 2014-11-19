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
        <title>Clientes</title>
        <meta http-equiv="Content-Type" content="text/html" charset=UTF-8" />
        <link href="../../css/admin.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <?php
            include "../layout/menu.php";
            ?>
            <div class="titulo">
                <h1>Clientes</h1>
            </div>
            <div class="add_client">
                <h2>Agregar un nuevo cliente</h2>
                <?php include "../layout/session_messages.php"; ?>
                <div class="formulario">
                    <form method="post" action="agregar_cliente.php" enctype="multipart/form-data">

                        <div class="izquierda">
                            <ul>                            
                                <li><label for="Nombre">Nombre</label><br><input value="" type="text" placeholder='Nombre' name='Nombre'</li>
                                <li><label for="Direccion">Direccion</label><br><input value="" type="text" placeholder='Direccion' name='Direccion'</li>
                                <li><label for="Telefono">Telefono</label><br><input value="" type="text" placeholder='Telefono' name='Telefono'</li>
                                <li><label for="e_mail">e_mail</label><br><input value="" type="text" placeholder='e_mail' name='e_mail'</li>
                                <li><label for="Link">Link</label><br><input value="" type="file" placeholder='Link' name='Link'</li>                                                            
                                <li><label for="lat">lat</label><br><input value="" type="text" placeholder='lat' name='lat'</li>
                                <li><label for="lng">lng</label><br><input value="" type="text" placeholder='lng' name='lng'</li>
                            </ul>                            
                        </div>
                        <div>
                            <ul>
                                <li><label for="twitter">twitter</label><br><input value="" type="text" placeholder='twitter' name='twitter'</li>
                                <li><label for="facebook">facebook</label><br><input value="" type="text" placeholder='facebook' name='facebook'</li>
                                <li><label for="pagina_web">pagina_web</label><br><input value="" type="text" placeholder='pagina_web' name='pagina_web'</li>
                                <li><label for="Imagen">Logotipo</label><br><input value="" type="file" placeholder='Imagen' name='Imagen'</li>
                                <li><label for="Servicios">Servicios</label><br><input value="" type="text" placeholder='Servicios' name='Servicios'</li>
                                <li><label for="Descuento">Descuento</label><br><input value="" type="text" placeholder='Descuento' name='Descuento'</li>
                                <li>
                                    <?php
                                    //Obtenemos las categorias 
                                    $query_directorio_categorias        = "select ID,categoria from directorio_categorias order by ID";
                                    $query_result_directorio_categorias = mysql_query($query_directorio_categorias, $db_conexion) or die(mysql_error());
                                    ?>
                                    <label>Categoria</label>
                                    <br>
                                    <select name="categoria" id="cat">
                                        <option value="0">Selecciona Categoria</option>
                                        <?php
                                        while ($row_categorias                     = mysql_fetch_assoc($query_result_directorio_categorias)) {
                                            echo "<option value=" . $row_categorias['ID'] . ">" . $row_categorias['categoria'] . "</option>";
                                        }
                                        mysql_free_result($query_result_directorio_categorias);
                                        ?>
                                    </select>
                                </li>
                                <li id="subcat">

                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="center">
                            <input type="submit" value="agregar" name="agregar">
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
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
                    $contador                = 0;
                    while ($row_directorio          = mysql_fetch_assoc($query_result_directorio)) {
                        ?>
                        <tr>
                            <td><?php echo $contador = $contador + 1; ?></td>
                            <td><?php echo $row_directorio['Nombre']; ?></td>
                            <td>
                                <form method="post" action="eliminar_cliente.php">
                                    <input type="hidden" name="id" value="<?php echo $row_directorio['ID']; ?>">    
                                    <input type="submit" name="eliminar" value="eliminar">
                                </form>                                
                            </td>                            
                        </tr>
                        <?php
                    }
                    mysql_free_result($query_result_directorio);
                    ?>                    
                </table>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
        <script>
            $("#cat").change(function () {
                $.post("get_subcategoria.php", {id_categoria: $("#cat").val()})
                        .done(function (data) {
                            $("#subcat").empty();
                            $("#subcat").append(data);
                        });
            });
        </script>
    </body>
</html>

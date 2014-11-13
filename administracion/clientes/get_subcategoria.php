<?php

session_start();
if (!$_SESSION['loggedin'])
{
    $_SESSION['error'] = "Inicia sesion";
    header("location ../index.php");
}
include ("../../includes/config.php");


$id_categoria = $_POST['id_categoria'];

$query_sub_categorias       = "select ID,subcategoria from directorio_subcategorias where id_categoria = " . $id_categoria . " order by ID";
$query_result_subcategorias = mysql_query($query_sub_categorias, $db_conexion) or die(mysql_error());

if (mysql_num_rows($query_result_subcategorias))
{
    echo "<select name='subcategoria'>";
    while ($row_subcategorias = mysql_fetch_assoc($query_result_subcategorias)) {
        echo "<option value=" . $row_subcategorias['ID'] . ">" . utf8_decode($row_subcategorias['subcategoria']) . "</option>";
    }
    mysql_free_result($query_result_subcategorias);
    echo "</select>";
}

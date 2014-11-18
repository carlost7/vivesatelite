<?
$query_categorias_menu        = "SELECT * FROM  directorio_categorias WHERE status='1' ORDER BY orden, categoria";
//Resultados de la consulta
$query_result_categorias_menu = mysql_query($query_categorias_menu, $db_conexion) or die(mysql_error());
?>
<div class="wrap">
    <div class="dcjq-mega-menu">
        <ul id="mega-menu-tut" class="menu">
            <li><a href="default.php">Revista</a></li>
            <li><a href="#">Directorio</a>
                <ul>
                    <table width="100%" border="0"  cellspacing="0" cellpadding="0"> 
                        <tr>
                            <?
                            while ($row_categorias_menu          = mysql_fetch_assoc($query_result_categorias_menu)) {
                                $c+=1;
                                ?> 
                            <? if ($c==1) { ?><th scope="col" valign="top"><? } ?>	
                        <li style="text-align:left;"><a href="directorio.php?id_cat=<? echo $row_categorias_menu['ID'];?>"><? echo $row_categorias_menu['categoria'];?></a></li>
                        <? if ($c==4) { ?></th><? } ?>
                        <? if ($c==4) $c=0; } 
                        ?>
                        </tr>

                    </table>
                </ul> 
                </th>
                </tr>
                </table>
            </li>

            <li><a href="eventos.php">Eventos</a></li>
            <li><a href="fotos.php">Fotos</a></li>
            <li><a href="ediciones/index.php">Ediciones Anteriores</a></li>
            <li><a href="clasificados.php">Clasificados Gratis</a></li>
            <li><a href="bolsadetrabajo.php">Bolsa de Trabajo</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
</div>
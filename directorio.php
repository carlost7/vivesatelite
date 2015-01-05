<?
include ("includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>Vive Sat&eacute;lite</title>
        <link href="estilos.css" rel="stylesheet" type="text/css" />
        <link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
        <script type='text/javascript' src='js/jquery.dcmegamenu.1.2.js'></script>
        <script type="text/javascript">
            $(document).ready(function ($) {
                $('#mega-menu-tut').dcMegaMenu({
                    rowItems: '3',
                    speed: 'fast'
                });
            });
        </script>
        <link type="text/css" rel="stylesheet" href="widget/css/rcarousel.css" />
        <script type="text/javascript" src="widget/lib/jquery.ui.core.js"></script>
        <script type="text/javascript" src="widget/lib/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="widget/lib/jquery.ui.rcarousel.js"></script>
        <script src="widget/lib/jquery-1.7.1.js" type="text/javascript"></script> 
        <script src="js/jquery.hashchange.min.js" type="text/javascript"></script>
        <script src="lib/jquery.easytabs.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#tab-container').easytabs();
            });
        </script>
        <link href="menu.css" rel="stylesheet" type="text/css" />
        <link href="css/skins/white.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-29633533-27', 'auto');   ga('send', 'pageview');  </script> </head>
    <body>
        <div class="contenedor">
            <div class="logo"><a href="default.php"><img src="images/logo.png" alt="" width="153" height="210" border="0" /></a></div>
            <div class="wrap">
                <? include("menu.php"); ?>
            </div>
            <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td><div class="pleca_azul_contacto"><a href="vive-krd.php" target="_blank"><img src="images/vivekrd.jpg" width="126" height="37" border="0" /></a><a href="https://www.facebook.com/pages/Vive-Satelite/274638523400" target="_blank"><img src="images/siguenos_fb.jpg" width="107" height="37" border="0" /></a><a href="https://twitter.com/vivesatelite" target="_blank"><img src="images/twitter.jpg" width="34" height="37" border="0" /></a></div></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><?
                        $id_cat                               = $_GET['id_cat'];
                        $query_directorio_subcategoria        = "SELECT DISTINCT subcategoria, directorio_subcategorias.ID FROM `directorio` JOIN directorio_subcategorias ON directorio.id_subcategoria=directorio_subcategorias.ID WHERE directorio.status=1 AND directorio_subcategorias.id_categoria = $id_cat";
//$query_directorio_subcategoria =  "SELECT *  FROM `directorio_subcategorias` WHERE `id_categoria` = $id_cat";
//Resultados de la consulta
                        $query_result_directorio_subcategoria = mysql_query($query_directorio_subcategoria, $db_conexion) or die(mysql_error());
                        ?>
                        <div id="tab-container" class='tab-container'>
                            <ul class='etabs'>
                                <li class='tab'><a href="#tabs1-0">TODOS</a></li>
                                <?
                                while ($row_directorio_subcategoria          = mysql_fetch_assoc($query_result_directorio_subcategoria)) {
                                    $c_sub+=1;
                                    ?>
                                    <li class='tab'><a href="directorio.php?id_cat=<?= $id_cat; ?>&id_scat=<?= $row_directorio_subcategoria['ID']; ?>#tabs1-<? echo $row_directorio_subcategoria['ID'] ?>"><?= $row_directorio_subcategoria['subcategoria']; ?></a></li>
<? } ?>
                            </ul>
                            <div class='panel-container'>
                                <div id="tabs1-0">
                                    <?
                                    $query_directorio        = "SELECT DISTINCT id_cliente, Nombre, Direccion, Telefono, e_mail, Link, lat, lng, twitter, facebook, pagina_web, Imagen, Servicios, Descuento FROM `directorio` JOIN clientes ON directorio.id_cliente=clientes.ID WHERE id_categoria='$id_cat' AND clientes.status='1' AND directorio.status='1' ORDER BY clientes.Nombre";
                                    //Resultados de la consulta
                                    $query_result_directorio = mysql_query($query_directorio, $db_conexion) or die(mysql_error());
                                    ?>
                                    <table border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="171" align="center" class="titulos_directorio">Nombre</td>
                                            <td width="231" align="center" class="titulos_directorio">Contacto</td>
                                            <td width="181" align="center" class="titulos_directorio">Servicios</td>
                                            <td width="395" align="center" class="titulos_directorio">Informacion Online</td>
                                        </tr>
<? while ($row_directorio          = mysql_fetch_assoc($query_result_directorio)) { ?>
                                            <tr>
                                                <td align="center" valign="middle"><a href="clientes.php?id=<?= $row_directorio['id_cliente']; ?>&id_cat=<?= $id_cat; ?>"><img src="logos/<?= $row_directorio['Imagen']; ?>" alt="" class="logos" /></a><a href="clientes.php?id="></a></td>
                                                <td align="left" valign="middle"><p style="font-weight:bold;"><? echo $row_directorio['Nombre']; ?></p>
                                                    <p><br />
                                                    </p>
                                                    <p><? echo $row_directorio['Direccion']; ?></p>
                                                    <p>&nbsp;</p>
                                                    <?
                                                    if ($row_directorio['Telefono'] == "")
                                                    {
                                                        
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <p>Tel:<? echo $row_directorio['Telefono']; ?></p>
                                                        <p>&nbsp;</p>
                                                        <?
                                                    }
                                                    ?>
                                                    <?
                                                    if ($row_directorio['e_mail'] == "")
                                                    {
                                                        
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <p>E-mail:<? echo $row_directorio['e_mail']; ?></p>
                                                        <p>&nbsp;</p>
                                                        <?
                                                    }
                                                    ?>

                                                    </p></td>
                                                <td align="left" valign="middle"><? echo $row_directorio['Servicios']; ?></td>
                                                <td align="center" valign="middle">  
                                                    <? if ($row_directorio['Descuento'] != '')
                                                    { ?>
                                                        <a href="#" title="<?= $row_directorio['Descuento']; ?>" class="tooltip"><span><img src="images/promo.png" alt="" width="35" height="35" class="iconos" /></span></a>
    <? } ?>
    <? if ($row_directorio['lat'] != '')
    { ?>
                                                        <img src="images/mapa.png" alt="" width="35" height="35" class="iconos" /><? } ?>
    <? if ($row_directorio['pagina_web'] != '')
    { ?>
                                                        <a href="<?= $row_directorio['pagina_web']; ?>" target="_blank"><img src="images/link.png" alt="" width="35" height="35" class="iconos"/></a>
                                    <? } ?>
                                    <? if ($row_directorio['facebook'] != '')
                                    { ?>
                                                        <a href="<?= $row_directorio['facebook']; ?>" target="_blank"><img src="images/facebook.png" width="35" height="35" class="iconos" /></a>
                                    <? } ?>
                                        <? if ($row_directorio['twitter'] != '')
                                        { ?>
                                                        <a href="<?= $row_directorio['twitter']; ?>" target="_blank"><img src="images/twitter.png" width="35" height="35" class="iconos" /></a>            <? } ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" align="left" valign="middle"><div class="division_directorio"></div></td>
                                            </tr><? } ?>
                                    </table> 
                                </div>

<?
$query_result_directorio_subcategoria = mysql_query($query_directorio_subcategoria, $db_conexion) or die(mysql_error());
while ($row_directorio_subcategoria          = mysql_fetch_assoc($query_result_directorio_subcategoria)) {
    $c_tabs                  = $row_directorio_subcategoria['ID'];
    ?>
                                    <div id="tabs1-<? echo $c_tabs; ?>">
    <?
    if ($c_tabs == 0)
        $query_directorio        = "SELECT DISTINCT id_cliente, directorio.* , clientes.* FROM `directorio` JOIN clientes ON directorio.id_cliente=clientes.ID WHERE id_categoria='$id_cat' AND clientes.status='1' AND directorio.status='1' ORDER BY clientes.Nombre";
    else
        $query_directorio        = "SELECT DISTINCT id_cliente, directorio.* , clientes.*  FROM `directorio` JOIN clientes ON directorio.id_cliente=clientes.ID WHERE id_categoria='$id_cat' AND id_subcategoria='$c_tabs' AND clientes.status='1' AND directorio.status='1' ORDER BY clientes.Nombre";
    //Resultados de la consulta
    $query_result_directorio = mysql_query($query_directorio, $db_conexion) or die(mysql_error());
    ?>
                                        <table border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="171" align="center" class="titulos_directorio">Nombre</td>
                                                <td width="231" align="center" class="titulos_directorio">Contacto</td>
                                                <td width="181" align="center" class="titulos_directorio">Servicios</td>
                                                <td width="395" align="center" class="titulos_directorio">Informaci&oacute;n Online</td>
                                            </tr>
                                                    <? while ($row_directorio          = mysql_fetch_assoc($query_result_directorio)) { ?>
                                                <tr>
                                                    <td align="center" valign="middle"><a href="clientes.php?id=<?= $row_directorio['id_cliente']; ?>&amp;id_cat=<?= $id_cat; ?>"><img src="logos/<?= $row_directorio['Imagen']; ?>" alt="" class="logos" /></a><a href="clientes.php?id=<?= $row_directorio['ID']; ?>"></a></td>
                                                    <td align="left" valign="middle"><p><span style="font-weight:bold;"><? echo $row_directorio['Nombre']; ?></span><br />
                                                            <br />
                                                        <? echo $row_directorio['Direccion']; ?></p>
                                                        <p>&nbsp;</p>
                                                        <p>Tel:<? echo $row_directorio['Telefono']; ?></p></td>
                                                    <td align="left" valign="middle"><? echo $row_directorio['Servicios']; ?></td>
                                                    <td align="center" valign="middle"><? if ($row_directorio['Descuento'] != '')
                                                { ?>
                                                            <a href="#" title="<?= $row_directorio['Descuento']; ?>" class="tooltip"><span><img src="images/promo.png" alt="" width="35" height="35" class="iconos" /></span></a>
                                                <? } ?>
        <? if ($row_directorio['lat'] != '')
        { ?>
                                                            <img src="images/mapa.png" alt="" width="35" height="35" class="iconos" />
        <? } ?>
        <? if ($row_directorio['pagina_web'] != '')
        { ?>
                                                            <a href="<?= $row_directorio['pagina_web']; ?>" target="_blank"><img src="images/link.png" alt="" width="35" height="35" class="iconos"/></a>
        <? } ?>
        <? if ($row_directorio['facebook'] != '')
        { ?>
                                                            <a href="<?= $row_directorio['facebook']; ?>" target="_blank"><img src="images/facebook.png" width="35" height="35" class="iconos" /></a>
        <? } ?>
        <? if ($row_directorio['twitter'] != '')
        { ?>
                                                            <a href="<?= $row_directorio['twitter']; ?>" target="_blank"><img src="images/twitter.png" width="35" height="35" class="iconos" /></a>
        <? } ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" align="left" valign="middle"><div class="division_directorio"></div></td>
                                                </tr>
    <? } ?>
                                        </table>
                                    </div>
<? } ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table></td>
            </tr>
            <tr>
                <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="447">&nbsp;</td>
                            <td width="553">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><? include("footer.php"); ?></td>
                        </tr>
                    </table></td>
            </tr>
            </table>
        </div>
    </body>
</html>
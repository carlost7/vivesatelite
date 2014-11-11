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
$(document).ready(function($){
	$('#mega-menu-tut').dcMegaMenu({
		rowItems: '3',
		speed: 'fast'
	});
});
</script>
<link type="text/css" rel="stylesheet" href="widget/css/rcarousel.css" />
<script type="text/javascript" src="widget/lib/jquery-1.7.1.js"></script>
<script type="text/javascript" src="widget/lib/jquery.ui.core.js"></script>
<script type="text/javascript" src="widget/lib/jquery.ui.widget.js"></script>
<script type="text/javascript" src="widget/lib/jquery.ui.rcarousel.js"></script>
<script type="text/javascript">
	jQuery(function($) {
		$( "#carousel ").rcarousel({
			auto: {
				enabled: true,
				direction: "next",
				interval: 5000
			},
			visible: 6,
			step: 6,
			margin: 10,
			width: 143,
			height: 71
		});
		
		$( "#ui-carousel-next" )
			.add( "#ui-carousel-prev" )
			.hover(
				function() {
					$( this ).css( "opacity", 0.7 );
				},
				function() {
					$( this ).css( "opacity", 1.0 );
				}
			);					
	});
</script>
<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="css/skins/white.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="contenedor">
  <div class="logo"><a href="default.php"><img src="images/logo" alt="" width="153" height="210" /></a></div>
<div class="wrap"><? include("menu.php"); ?></div>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div class="pleca_azul_contacto"><img src="images/vivekrd.jpg" width="126" height="37" /><img src="images/siguenos_fb.jpg" width="107" height="37" /><img src="images/twitter.jpg" width="34" height="37" /></div></td>
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
<?
$id_cat=$_GET['id_cat'];
$query_directorio_subcategoria =  "SELECT *  FROM `directorio_subcategorias` WHERE `id_categoria` = $id_cat";
//Resultados de la consulta
$query_result_directorio_subcategoria=mysql_query($query_directorio_subcategoria, $db_conexion) or die (mysql_error());	
?> 
    <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <div id="tab-container" class='tab-container'>
 <ul class='etabs'>
    <li class='tab'><a href="directorio.php?id_cat=<?=$id_cat?>&id_scat=0#tabs1-0">TODOS</a></li>
 <?  while ($row_directorio_subcategoria=mysql_fetch_assoc($query_result_directorio_subcategoria)){ 
 $c_sub+=1;
 ?>
   <li class='tab'><a href="directorio.php?id_cat=<?=$id_cat?>&id_scat=<?=$row_directorio_subcategoria['ID']?>#tabs1-<? echo $c_sub; ?>"><?=$row_directorio_subcategoria['subcategoria'];?></a></li>
  <? } ?>
 </ul>
 <div class='panel-container'>
<? 
$query_directorio_subcategoria =  "SELECT *  FROM `directorio_subcategorias` WHERE `id_categoria` = $id_cat";
//Resultados de la consulta
$query_result_directorio_subcategoria=mysql_query($query_directorio_subcategoria, $db_conexion) or die (mysql_error());
?>
 <?  while ($row_directorio_subcategoria=mysql_fetch_assoc($query_result_directorio_subcategoria)){ 
$c_tabs+=1;
 
if ($_GET['id_scat']==0 || $_GET['id_scat']=="")
$query_directorio =  "SELECT * FROM `directorio` JOIN clientes ON directorio.id_cliente=clientes.ID WHERE id_categoria='$id_cat' AND clientes.status='1' AND directorio.status='1' ORDER BY clientes.Nombre";
else
$query_directorio =  "SELECT * FROM `directorio` JOIN clientes ON directorio.id_cliente=clientes.ID WHERE id_categoria='$id_cat' AND id_subcategoria='$id_scat' AND clientes.status='1' AND directorio.status='1' ORDER BY clientes.Nombre";
//Resultados de la consulta
$query_result_directorio=mysql_query($query_directorio, $db_conexion) or die (mysql_error());	
 
 ?>
 <div id="tabs1-<? echo $c_tabs; ?>">
<table width="980" border="0" cellspacing="0" cellpadding="0">
  <tr class="titulos_directorio">
    <td width="79" align="center">Nombre</td>
    <td width="142" align="center">Contacto</td>
    <td width="529" align="center">Servicios</td>
    <td width="250" align="center">Información Online</td>
  </tr>
  <?  while ($row_directorio=mysql_fetch_assoc($query_result_directorio)){ ?>
  <tr>
    <td align="left" valign="middle"><? echo $row_directorio['Nombre']; ?></td>
    <td align="left" valign="middle"><? ?></td>
    <td align="left" valign="middle"><? ?></td>
    <td align="center" valign="middle"><img src="images/promo.png" alt="" width="35" height="35" class="iconos" /><img src="images/mapa.png" alt="" width="35" height="35" class="iconos" /><img src="images/link.png" alt="" width="35"
 height="35" class="iconos"/><img src="images/facebook.png" width="35" height="35" class="iconos" /><img src="images/twitter.png" width="35" height="35" class="iconos" /></td>
  </tr><? } ?>
  <tr>
    <td colspan="4" align="left" valign="middle"><div class="division_directorio"></div></td>
  </tr>
</table>
  </div>
  <? } ?>
 </div>
</div>
             
            <tr>
            <td>
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
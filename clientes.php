<?
include ("includes/config.php");
$id_cat=$_GET['id_cat'];
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
  <script type="text/javascript" src="widget/lib/jquery.ui.core.js"></script>
  <script type="text/javascript" src="widget/lib/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="widget/lib/jquery.ui.rcarousel.js"></script>
  <script src="widget/lib/jquery-1.7.1.js" type="text/javascript"></script> 
  <script src="js/jquery.hashchange.min.js" type="text/javascript"></script>
  <script src="lib/jquery.easytabs.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
    });
  </script>
  <link href="menu.css" rel="stylesheet" type="text/css" />
  <link href="css/skins/white.css" rel="stylesheet" type="text/css" />
  </head>
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
            <td align="center">         
            <? 
			$id=$_GET['id'];
        $query_directorio =  "SELECT * FROM `directorio` JOIN clientes ON directorio.id_cliente=clientes.ID WHERE clientes.ID='$id' AND clientes.status='1' AND directorio.status='1' LIMIT 1";
        //Resultados de la consulta
        $query_result_directorio=mysql_query($query_directorio, $db_conexion) or die (mysql_error());	?>
            <?  while ($row_directorio=mysql_fetch_assoc($query_result_directorio)){ ?>
            <img src="clientes/<?=$row_directorio['Link'];?>" />
<? } ?>            
</td>
          </tr>
          </table></td>
      </tr>
      <tr>
        <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="361">&nbsp;</td>
              <td width="362" align="right">&nbsp;</td>
              <td width="277">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td align="right">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
            <td colspan="3" align="center"><a href="directorio.php?id_cat=<?=$id_cat;?>"><img src="images/boton-regresar.png" width="95" height="30" /></a></td>
          </tr>
            <tr>
              <td colspan="3" align="center">&nbsp;</td>
            </tr>
            <tr>
            <td colspan="3"><? include("footer.php"); ?></td>
          </tr>
          </table></td>
      </tr>
    </table>
  </div>
</body>
</html>
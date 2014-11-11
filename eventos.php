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

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "baea8c72-3ec8-424e-979a-58697926d3f9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="css/skins/white.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="contenedor">
  <div class="logo"><a href="default.php"><img src="images/logo.png" width="153" height="210" /></a></div>
<div class="wrap"><? include("menu.php"); ?></div>
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
  <tr></tr>
  <tr></tr>
  <tr>
    <td><table width="1000" border="0" align="center" cellspacing="20">
      <tr>
        <td width="804" align="center"><table width="520" border="0" cellspacing="0" cellpadding="0">
        </table></td>
        </tr>
      <tr>
        <td align="center" bgcolor="#0071BD" class="titulo_anios">Nombre de Evento</td>
        </tr>
      <tr>
        <td align="center"><img src="eventos/miamiclub.jpg" width="800" height="1240" /></td>
        </tr>
      <tr>
        <td align="center"><span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_email_large' displayText='Email'></span>
</td>
      </tr>
    </table></td>
  </tr>
  <tr></tr>
<tr>
    <td><? include("footer.php"); ?> </td></tr>
</table>
</div>
</body>
</html>
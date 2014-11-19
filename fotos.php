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
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="css/skins/white.css" rel="stylesheet" type="text/css" />
</head>
<body onload="MM_preloadImages('fotos/abril2013/over-collage_fotos_abril2013.png','fotos/marzo2013/over-collage_fotos_marzo2013.png','fotos/febrero2013/over-collage_fotos_febrero2013.png','fotos/enero2013/over-collage_fotos_enero2013.png','fotos/diciembre2012/over-collage_fotos_diciembre2012.png','fotos/noviembre2012/over-collage_fotos_noviembre2012.png','fotos/octubre2012/over-collage_fotos_octubre2012.png','fotos/agosto2012/over-collage_fotos_agosto2012.png','fotos/julio2012/over-collage_fotos_julio2012.png','fotos/junio_2012/over-collage_fotos_junio2012.png','fotos/mayo2012/over-collage_fotos_mayo2012.png','fotos/abril2012/over-collage_fotos_abril2012.png','fotos/marzo2012/over-collage_fotos_marzo2012.png','fotos/febrero2012/over-collage_fotos_febrero2012.png','fotos/enero2012/over-collage_fotos_enero2012.png','fotos/diciembre2011/over-collage_fotos_diciembre2011.png','fotos/septiembre2011/over-collage_fotos_septiembre2011.png','fotos/octubre2011/over-collage_fotos_octubre2011.png','fotos/noviembre2011/over-collage_fotos_noviembre2011.png','fotos/agosto2011/over-collage_fotos_agosto2011.png','fotos/julio2011/over-collage_fotos_julio2011.png','fotos/mayo2011/over-collage_fotos_mayo2011.png','fotos/marzo2011/over-collage_fotos_marzo2011.png','fotos/febrero2011/over-collage_fotos_febrero2011.png','fotos/enero2011/over-collage_fotos_enero2011.png','fotos/diciembre2010/over-collage_fotos_diciembre2010.png','fotos/noviembre2010/over-collage_fotos_noviembre2010.png','fotos/octubre2010/over-collage_fotos_octubre2010.png','fotos/septiembre2010/over-collage_fotos_septiembre2010.png','fotos/agosto2010/over-collage_fotos_agosto2010.png','fotos/julio2010/over-collage_fotos_julio2010.png','fotos/junio2010/over-collage_fotos_junio2010.png','fotos/mayo2010/over-collage_fotos_mayo2010.png','fotos/mayo2013/over-collage_fotos_mayo2013.png','fotos/junio2013/over-fotos-junio2013.png','fotos/julio2013/over-fotos-julio2013.png','fotos/agosto2013/foto-over.jpg','fotos/octubre2013/hover-octubre2013.png','fotos/noviembre2013/over.png','fotos/diciembre2013/over.png')">
<div class="contenedor">
  <div class="logo"><a href="default.php"><img src="images/logo.png" width="153" height="210" /></a></div>
<div class="wrap"><? include("menu.php"); ?></div>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div class="pleca_azul_contacto"><a href="vive-krd.php" target="_blank"><a href="http://www.vivepolanco.mx/" target="_blank"></a><a href="vive-krd.php" target="_blank"><img src="images/vivekrd.jpg" width="126" height="37" border="0" /></a><a href="https://www.facebook.com/pages/Vive-Satelite/274638523400" target="_blank"><img src="images/siguenos_fb.jpg" width="107" height="37" border="0" /></a><a href="https://twitter.com/vivesatelite" target="_blank"><img src="images/twitter.jpg" width="34" height="37" border="0" /></a></div></td>
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
    <td><table width="891" border="0" align="center" cellspacing="20">
      <tr>
        <td colspan="4" align="center"><table width="520" border="0" cellspacing="0" cellpadding="0">
        </table></td>
        </tr>
            
            
            <tr>
        <td colspan="4" align="center" class="titulo_anios"> A&ntilde;o 2014</td>
        </tr>
      <tr>                                                                                                                                                                                                                                 
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_octubre2014.php" target="_blank"><img src="fotos/octubre2014/octubre2014.png" alt="" width="200" height="138" border="0" id="Image43" onmouseover="MM_swapImage('Image43','','fotos/octubre2014/over_octubre2014.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>   
      </tr>
            
            
      <tr>
        <td colspan="4" align="center" class="titulo_anios"> A&ntilde;o 2013</td>
        </tr>
      <tr>
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_diciembre2013.php" target="_blank"><img src="fotos/diciembre2013/collage_fotos_diciembre2013.png" alt="" width="200" height="138" border="0" id="Image42" onmouseover="MM_swapImage('Image42','','fotos/diciembre2013/over.png','Image41','','fotos/noviembre2013/over.png','Image6','','fotos/noviembre2012/over-collage_fotos_noviembre2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_noviembre2013.php" target="_blank"><img src="fotos/noviembre2013/collage_fotos_noviembre2013.png" alt="" width="200" height="138" border="0" id="Image41" onmouseover="MM_swapImage('Image41','','fotos/noviembre2013/over.png','Image6','','fotos/noviembre2012/over-collage_fotos_noviembre2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center" class="titulo_edicionesanterio<tr>
      res"><a href="fotos_octubre2013.php" target="_blank"><img src="fotos/octubre2013/octubre2013.png" width="200" height="138" id="Image40" onmouseover="MM_swapImage('Image40','','fotos/octubre2013/hover-octubre2013.png',1)" onmouseout="MM_swapImgRestore()" border="0" /></a></td>
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_septiembre2013.php" target="_blank"><img src="fotos/septiembre2013/collage_fotos_septiembre2013.png" width="200" height="138" onmouseover="" border="0" /></a></td>
      </tr>
      <tr>
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_agosto2013.php" target="_blank"><img src="fotos/agosto2013/collage_fotos_agosto2013.png" alt="" width="200" height="138" border="0" id="Image39" onmouseover="MM_swapImage('Image39','','fotos/agosto2013/foto-over.jpg','Image8','','fotos/agosto2012/over-collage_fotos_agosto2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_julio2013.php" target="_blank"><img src="fotos/julio2013/julio2013.png" width="200" height="138" border="0" id="Image38" onmouseover="MM_swapImage('Image38','','fotos/julio2013/over-fotos-julio2013.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_junio2013.php" target="_blank"><img src="fotos/junio2013/junio2013.png" width="200" height="138" border="0" id="Image37" onmouseover="MM_swapImage('Image37','','fotos/junio2013/over-fotos-junio2013.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center" class="titulo_edicionesanteriores"><a href="fotos_mayo2013.php" target="_blank"><img src="fotos/mayo2013/collage_fotos_mayo2013.png" width="200" height="138" border="0" id="Image36" onmouseover="MM_swapImage('Image36','','fotos/mayo2013/over-collage_fotos_mayo2013.png','Image11','','fotos/mayo2012/over-collage_fotos_mayo2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td width="208" align="center" class="titulo_edicionesanteriores"><a href="fotos_abril2013.php" target="_blank"><img src="fotos/abril2013/collage_fotos_abril2013.png" alt="" width="200" height="138" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','fotos/abril2013/over-collage_fotos_abril2013.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td width="199" align="center" class="titulo_edicionesanteriores"><a href="fotos_marzo2013.php" target="_blank"><img src="fotos/marzo2013/collage_fotos_marzo2013.png" alt="" width="200" height="138" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','fotos/marzo2013/over-collage_fotos_marzo2013.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td width="199" align="center" class="titulo_edicionesanteriores"><a href="fotos_febrero2013.php" target="_blank"><img src="fotos/febrero2013/collage_fotos_febrero2013.png" width="200" height="138" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','fotos/febrero2013/over-collage_fotos_febrero2013.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td width="198" align="center" class="titulo_edicionesanteriores"><a href="fotos_enero2013.php" target="_blank"><img src="fotos/enero2013/collage_fotos_enero2013.png" alt="" width="200" height="138" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','fotos/enero2013/over-collage_fotos_enero2013.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td colspan="4" align="center" class="titulo_anios">A&ntilde;o 2012</td>
      </tr>
      <tr>
        <td align="center"><a href="fotos_diciembre2012.php" target="_blank"><img src="fotos/diciembre2012/collage_fotos_diciembre2012.png" alt="" width="200" height="138" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','fotos/diciembre2012/over-collage_fotos_diciembre2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_noviembre2012.php" target="_blank"><img src="fotos/noviembre2012/collage_fotos_noviembre2012.png" alt="" width="200" height="138" border="0" id="Image6" onmouseover="MM_swapImage('Image6','','fotos/noviembre2012/over-collage_fotos_noviembre2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_octubre2012.php" target="_blank"><img src="fotos/octubre2012/collage_fotos_octubre2012.png" alt="" width="200" height="138" border="0" id="Image7" onmouseover="MM_swapImage('Image7','','fotos/octubre2012/over-collage_fotos_octubre2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><img src="fotos/septiembre2012/collage_fotos_septiembre2012.png" width="200" height="138" border="0" /></td>
      </tr>
      <tr>
        <td align="center"><a href="fotos_agosto2012.php" target="_blank"><img src="fotos/agosto2012/collage_fotos_agosto2012.png" alt="" width="200" height="138" border="0" id="Image8" onmouseover="MM_swapImage('Image8','','fotos/agosto2012/over-collage_fotos_agosto2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_julio2012.php" target="_blank"><img src="fotos/julio2012/collage_fotos_julio2012.png" alt="" width="200" height="138" border="0" id="Image9" onmouseover="MM_swapImage('Image9','','fotos/julio2012/over-collage_fotos_julio2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_junio2012.php" target="_blank"><img src="fotos/junio_2012/collage_fotos_junio2012.png" alt="" width="200" height="138" border="0" id="Image10" onmouseover="MM_swapImage('Image10','','fotos/junio_2012/over-collage_fotos_junio2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_mayo2012.php" target="_blank"><img src="fotos/mayo2012/collage_fotos_mayo2012.png" width="200" height="138" border="0" id="Image11" onmouseover="MM_swapImage('Image11','','fotos/mayo2012/over-collage_fotos_mayo2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td align="center"><a href="fotos_abril2012.php" target="_blank"><img src="fotos/abril2012/collage_fotos_abril2012.png" alt="" width="200" height="138" border="0" id="Image12" onmouseover="MM_swapImage('Image12','','fotos/abril2012/over-collage_fotos_abril2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_marzo2012.php" target="_blank"><img src="fotos/marzo2012/collage_fotos_marzo2012.png" width="200" height="138" border="0" id="Image13" onmouseover="MM_swapImage('Image13','','fotos/marzo2012/over-collage_fotos_marzo2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_febrero2012.php" target="_blank"><img src="fotos/febrero2012/collage_fotos_febrero2012.png" width="200" height="138" border="0" id="Image14" onmouseover="MM_swapImage('Image14','','fotos/febrero2012/over-collage_fotos_febrero2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_enero2012.php" target="_blank"><img src="fotos/enero2012/collage_fotos_enero2012.png" width="200" height="138" border="0" id="Image15" onmouseover="MM_swapImage('Image15','','fotos/enero2012/over-collage_fotos_enero2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td colspan="4" align="center" class="titulo_anios">A&ntilde;o 2011</td>
      </tr>
      <tr>
        <td align="center"><a href="fotos_diciembre2011.php" target="_blank"><img src="fotos/diciembre2011/collage_fotos_diciembre2011.png" alt="" width="200" height="138" border="0" id="Image16" onmouseover="MM_swapImage('Image16','','fotos/diciembre2011/over-collage_fotos_diciembre2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_noviembre2011.php" target="_blank"><img src="fotos/noviembre2011/collage_fotos_noviembre2011.png" alt="" width="200" height="138" border="0" id="Image17" onmouseover="MM_swapImage('Image17','','fotos/noviembre2011/over-collage_fotos_noviembre2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_octubre2011.php" target="_blank"><img src="fotos/octubre2011/collage_fotos_octubre2011.png" width="200" height="138" border="0" id="Image18" onmouseover="MM_swapImage('Image18','','fotos/octubre2011/over-collage_fotos_octubre2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_septiembre2011.php" target="_blank"><img src="fotos/septiembre2011/collage_fotos_septiembre2011.png" width="200" height="138" border="0" id="Image19" onmouseover="MM_swapImage('Image19','','fotos/septiembre2011/over-collage_fotos_septiembre2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td align="center"><a href="fotos_agosto2011.php" target="_blank"><img src="fotos/agosto2011/collage_fotos_agosto2011.png" width="200" height="138" border="0" id="Image21" onmouseover="MM_swapImage('Image21','','fotos/agosto2011/over-collage_fotos_agosto2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_julio2011.php" target="_blank"><img src="fotos/julio2011/collage_fotos_julio2011.png" width="200" height="138" border="0" id="Image22" onmouseover="MM_swapImage('Image22','','fotos/julio2011/over-collage_fotos_julio2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_junio2011.php" target="_blank"><img src="fotos/junio2011/collage_fotos_junio2011.png" width="200" height="138" border="0" id="Image23" onmouseover="MM_swapImage('Image23','','fotos/junio_2012/over-collage_fotos_junio2012.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_mayo2011.php" target="_blank"><img src="fotos/mayo2011/collage_fotos_mayo2011.png" width="200" height="138" border="0" id="Image24" onmouseover="MM_swapImage('Image24','','fotos/mayo2011/over-collage_fotos_mayo2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td align="center"><img src="fotos/abril2012/collage_fotos_abril2012.png" alt="" width="200" height="138" border="0" id="Image20" /></td>
        <td align="center"><a href="fotos_marzo2011.php" target="_blank"><img src="fotos/marzo2011/collage_fotos_marzo2011.png" width="200" height="138" border="0" id="Image25" onmouseover="MM_swapImage('Image25','','fotos/marzo2011/over-collage_fotos_marzo2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_febrero2011.php" target="_blank"><img src="fotos/febrero2011/collage_fotos_febrero2011.png" alt="" width="200" height="138" border="0" id="Image26" onmouseover="MM_swapImage('Image26','','fotos/febrero2011/over-collage_fotos_febrero2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_enero2011.php" target="_blank"><img src="fotos/enero2011/collage_fotos_enero2011.png" width="200" height="138" border="0" id="Image27" onmouseover="MM_swapImage('Image27','','fotos/enero2011/over-collage_fotos_enero2011.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td colspan="4" align="center" class="titulo_anios">A&ntilde;o 2010</td>
        </tr>
      <tr>
        <td align="center"><a href="fotos_diciembre2010.php" target="_blank"><img src="fotos/diciembre2010/collage_fotos_diciembre2010.png" width="200" height="138" border="0" id="Image28" onmouseover="MM_swapImage('Image28','','fotos/diciembre2010/over-collage_fotos_diciembre2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_noviembre2010.php" target="_blank"><img src="fotos/noviembre2010/collage_fotos_noviembre2010.png" width="200" height="138" border="0" id="Image29" onmouseover="MM_swapImage('Image29','','fotos/noviembre2010/over-collage_fotos_noviembre2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_octubre2010.php" target="_blank"><img src="fotos/octubre2010/collage_fotos_octubre2010.png" width="200" height="138" border="0" id="Image30" onmouseover="MM_swapImage('Image30','','fotos/octubre2010/over-collage_fotos_octubre2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_septiembre2010.php" target="_blank"><img src="fotos/septiembre2010/collage_fotos_septiembre2010.png" width="200" height="138" border="0" id="Image31" onmouseover="MM_swapImage('Image31','','fotos/septiembre2010/over-collage_fotos_septiembre2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
      <tr>
        <td align="center"><a href="fotos_agosto2010.php" target="_blank"><img src="fotos/agosto2010/collage_fotos_agosto2010.png" width="200" height="138" border="0" id="Image32" onmouseover="MM_swapImage('Image32','','fotos/agosto2010/over-collage_fotos_agosto2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_julio2010.php" target="_blank"><img src="fotos/julio2010/collage_fotos_julio2010.png" width="200" height="138" border="0" id="Image33" onmouseover="MM_swapImage('Image33','','fotos/julio2010/over-collage_fotos_julio2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_junio2010.php" target="_blank"><img src="fotos/junio2010/collage_fotos_junio2010.png" width="200" height="138" border="0" id="Image34" onmouseover="MM_swapImage('Image34','','fotos/junio2010/over-collage_fotos_junio2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td align="center"><a href="fotos_mayo2010.php" target="_blank"><img src="fotos/mayo2010/collage_fotos_mayo2010.png" width="200" height="138" border="0" id="Image35" onmouseover="MM_swapImage('Image35','','fotos/mayo2010/over-collage_fotos_mayo2010.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
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
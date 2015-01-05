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
<script type="text/javascript"> 
	var RecaptchaOptions = {   
	theme : 'white' }; 
</script>
<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="css/skins/white.css" rel="stylesheet" type="text/css" />
<script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-29633533-27', 'auto');   ga('send', 'pageview');  </script> </head>
<body>
<div class="contenedor">
  <div class="logo"><a href="default.php"><img src="images/logo.png" width="153" height="210" border="0" /></a></div>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">  
<? 
          require_once('recaptchalib.php');          
		  $privatekey = "6LePf-ISAAAAANFKEIjjBBOhnbGDZBrX520z2jwO"; // you got this from the signup page 	
	$resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);  
	if (!$resp->is_valid) { ?>
    <span class="titulo_anios">Los caracteres introducidos fueron incorrectos. Vuelve a intentarlo.</span>
<? } else { ?>  
	<?PHP 

	//$archivo=$_FILES['uploadedfile']['name'];
	$archivo=md5(date('r', time())).".jpg";
	
	$_FILES['uploadedfile']['tmp_name']; 	
	
//	if (mysql_query($query, $db_conexion) && (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], "imagenes/".$_FILES['uploadedfile']['name'])))
	if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], "clasificados/".$archivo))
	{
			//chmod("imagenes/".$_FILES['uploadedfile']['name'], 0777);
			//chmod($archivo, 0777);
			
  echo("El archivo se subió correctamente");
 } else {
  echo("No se pudo subir el archivo, intente mas tarde.");
 }

 ?>
<?php 
//define the receiver of the email 
$to = 'hcardosot@odontologos.mx'; 
//define the subject of the email 
$subject = 'Formulario Bolsa de Trabajo Vive Satelite'; 
//create a boundary string. It must be unique 
//so we use the MD5 algorithm to generate a random hash 
$random_hash = md5(date('r', time())); 
//define the headers we want passed. Note that they are separated with \r\n 
$headers = "From: ".$_POST['email']."\r\nReply-To: ".$_POST['email']; 
//add boundary string and mime type specification 
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 
//copy current buffer contents into $message variable and delete current output buffer 
$message = "Nueva Vacante Postulada"; 
//send the email 
$mail_sent = @mail( $to, $subject, $message, $headers ); 
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
//echo $mail_sent ? "Mail sent" : "Mail failed"; 

//include("includes/funciones.php");

$contacto=$_POST['nombre'];
$vacante=$_POST['vacante'];
$vencimiento= date("Y-m-d");
$email=$_POST['email'];
$descripcion=$_POST['descripcion'];
$oferta=$_POST['oferta'];

	echo $query =  "INSERT INTO `clasificados` (`ID` ,`Contacto` ,`Vacante` , `Vencimiento` ,`Descripcion` ,`Oferta` , `Imagen`, `Logo` ,`Mail` ,`Status` )VALUES (NULL , '$contacto', '$vacante', '$vencimiento', '$descripcion', '$oferta', '$archivo', '', '$email', 'S')";

$DV = mysql_query($query, $db_conexion) or die (mysql_error());
?> 

</p>
<p class="titulo_anios">Gracias por enviarnos tu información.</p>
<p class="titulo_anios">Estaremos en contacto contigo.</p>
<? } ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr></tr>
<tr>
    <td><? include("footer.php"); ?> </td></tr>
</table>
</div>
</body>
</html>
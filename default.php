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
            <script type="text/javascript" src="widget/lib/jquery-1.7.1.js"></script>
            <script type="text/javascript" src="widget/lib/jquery.ui.core.js"></script>
            <script type="text/javascript" src="widget/lib/jquery.ui.widget.js"></script>
            <script type="text/javascript" src="widget/lib/jquery.ui.rcarousel.js"></script>
            <script type="text/javascript">
                  jQuery(function ($) {
                        $("#carousel ").rcarousel({
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

                        $( "#ui-carousel-next")
                                .add("#ui-carousel-prev")
                                .hover(
                                        function () {
                                              $(this).css( "opacity", 0.7);
                                        },
                                        function () {
                                              $(this).css( "opacity", 1.0);
                                        }
                                );
                  });
            </script>
            <link href="menu.css" rel="stylesheet" type="text/css" />
            <link href="css/skins/white.css" rel="stylesheet" type="text/css" />
      </head>
      <body>
            <div class="contenedor">
                  <div class="logo"><a href="default.php"><img src="images/logo.png" width="153" height="210" border="0" /></a></div>
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
                        <tr>
                              <td>&nbsp;</td>
                        </tr>
                        <tr>
                              <td>&nbsp;</td>
                        </tr>
                        <tr>
                              <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                                <td width="447" align="center"><div class="revista"></div>
                                                      <a href="revista/index.php" target="_blank"><img src="revista/imgs_revista_mes/1.jpg" width="400" height="551" border="0" /></a></td>
                                                <td width="553" align="center"><table width="520" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                  <td align="center"><div class="contenido_revista">
                                                                              <p class="titulo_inicio">REVISTA VIVE SAT&Eacute;LITE<sup> &reg;</sup></p>
                                                                              <p>Despu&eacute;s de su lanzamiento en Febrero 2010  la revista Vive Sat&eacute;lite&reg; ha logrado consolidarse como la revista n&uacute;mero 1 de la zona, esto gracias a su originalidad, contenido, colores, temas y claro los mejores negocios de la zona.</p>
                                                                              <p>&nbsp;</p>
                                                                              <p>Una revista social gratuita dirigida a un nivel socioecon&oacute;mico B B- C C- con Target 18/45, que permite a los habitantes de la zona: Escribir sus reportajes, felicitar a sus seres queridos, comentar problemas de nuestra ciudad, as&iacute; como anunciar sus productos y servicios para nuestra comunidad. Con m&aacute;s de 20,000 ejemplares en la Zona de Sat&eacute;lite y sus alrededores.            </p>
                                                                        </div></td>
                                                            </tr>
                                                            <tr>
                                                                  <td align="center">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                  <td><div class="contenido_galeria_inicio"><iframe width="515" height="315" frameborder="0" src="galeria.php" scrolling="no"></iframe></div></td>
                                                            </tr>
                                                      </table></td>
                                          </tr>
                                          <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                                <td align="right"><a href="revista/index.php" target="_blank"><img src="images/boton_ver_revista.png" width="95" height="30" class="boton_verrevista" /></a></td>
                                                <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
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
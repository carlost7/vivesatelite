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

            <script type="text/javascript">var switchTo5x = true;</script>
            <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
            <script type="text/javascript">stLight.options({publisher: "baea8c72-3ec8-424e-979a-58697926d3f9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
            <?PHP
            $query = "SELECT * FROM bolsadetrabajo  WHERE `Status`='S' AND `Vencimiento` + INTERVAL '1' MONTH >= CURDATE() ORDER BY RAND()";

            $DV           = mysql_query($query, $db_conexion) or die(mysql_error());
            $row_DV       = mysql_fetch_assoc($DV);
            $totalROWS_DV = mysql_num_rows($DV);
            ?>
            <script type="text/javascript">
                  var RecaptchaOptions = {
                        theme: 'white'};
            </script>
            <link href="menu.css" rel="stylesheet" type="text/css" />
            <link href="css/skins/white.css" rel="stylesheet" type="text/css" />
            <style type="text/css">
                  .style10 {color: #0033CC}
                  .style2 {	color: #0033CC
                  }
                  .style3 {color: #ED1C24}
                  .style4 {	font-size: 14px;
                            font-weight: bold;
                  }
                  .style7 {font-size: 24px}
                  .style8 {color: #FF0000}
            </style>
            <script>   (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                  (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-29633533-27', 'auto');
      ga('send', 'pageview');</script> 
      </head>
      <body>
            <div class="contenedor">
                  <div class="logo"><a href="default.php"><img src="images/logo.png" width="153" height="210" /></a></div>
                  <div class="wrap"><? include("menu.php"); ?></div>
                  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                              <td><div class="pleca_azul_contacto">s<a href="http://www.vivepolanco.mx/" target="_blank"><img src="images/vive-polanco.jpg" width="158" height="37" border="0" /></a><a href="vive-krd.php" target="_blank"><img src="images/vivekrd.jpg" width="126" height="37" border="0" /></a><a href="https://www.facebook.com/pages/Vive-Satelite/274638523400" target="_blank"><img src="images/siguenos_fb.jpg" width="107" height="37" border="0" /></a><a href="https://twitter.com/vivesatelite" target="_blank"><img src="images/twitter.jpg" width="34" height="37" border="0" /></a></div></td>
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
                        <tr></tr>
                        <tr></tr>
                        <tr>
                              <td>
                                    <table width="1000" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                                <td width="400" align="center" valign="top"><table width="585" border="0" align="center" cellpadding="50" cellspacing="0" class="fondo_clasificados1">
                                                            <tr></tr>
                                                            <tr>
                                                                  <td align="center"><p align="justify" class="titulo_inicio">Publica tu vacante aqu&iacute;
                                                                        </p>
                                                                        <p align="justify">Env&iacute;anos lo vacante que quieres postular  y nosotros lo anunciamos!!!.</p>              </td>
                                                            </tr>
                                                            <tr>
                                                                  <td align="center">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                  <td align="center" valign="top"><form action="mail_bolsadetrabajo.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                                                              <table border="0" cellspacing="5" cellpadding="15">
                                                                                    <tr>
                                                                                          <td width="204" align="right">Nombre del Contacto:</td>
                                                                                          <td width="219" align="left"><label>
                                                                                                      <input name="nombre" type="text" class="formRespuestas" id="nombre" />
                                                                                                </label></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                          <td align="right">Vacante:</td>
                                                                                          <td align="left"><label>
                                                                                                      <input name="vacante" type="text" class="formRespuestas" id="vacante" />
                                                                                                </label></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                          <td align="right">Mail de Contacto:</td>
                                                                                          <td align="left"><input name="email" type="text" class="formRespuestas" id="email" /></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                          <td align="right">Descripci&oacute;n del Puesto:</td>
                                                                                          <td align="left"><textarea name="descripcion" class="formRespuestas_caja" id="descripcion"></textarea></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                          <td align="right">Oferta:</td>
                                                                                          <td align="left"><textarea name="oferta" class="formRespuestas_caja" id="oferta"></textarea></td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                          <td colspan="2" align="center">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                          <td colspan="2" align="center"><?php
                                                                                                require_once('recaptchalib.php');
                                                                                                $publickey    = "6LePf-ISAAAAAAwXbb3QwvzuDarNCt1uOK0iokJQ"; // you got this from the signup page          
                                                                                                echo recaptcha_get_html($publickey);
                                                                                                ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                          <td colspan="2" align="center">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                          <td colspan="2" align="right"><label>
                                                                                                      <input type="image" src="images/enviar.png" name="button" id="button" value="Enviar" />
                                                                                                </label></td>
                                                                                    </tr>
                                                                              </table>

                                                                        </form></td>
                                                            </tr>
                                                      </table>            </td>
                                                <td width="600" align="center"><table border="0" align="center" cellpadding="10" cellspacing="0">

<? do { ?><tr>
                                                                        <td align="center" class="style1">&nbsp;</td>

                                                                        <td align="center"><table border="0" cellpadding="0" cellspacing="0" class="fondo_clasificados2">
                                                                                    <tr>
                                                                                          <td><? if ($row_DV['Imagen'] != '')
      { ?><img src="clasificados/<?PHP echo $row_DV['Imagen']; ?>" width="150" height="150" class="imagen_clasificados" /><? } ?></td>
                                                                                          <td><div align="left">
                                                                                                      <p>SE SOLICITAN: <?PHP echo $row_DV['Vacante']; ?><br />
                                                                                                            Descripci&oacute;n: <?PHP echo $row_DV['Descripcion']; ?><br />
                                                                                                            OFERTA:<?PHP echo $row_DV['Oferta']; ?><br />
                                                                                                            Enviar Curriculum a: <span class="linksclasificados"><a href="mailto:<?PHP echo $row_DV['Mail']; ?>"><?PHP echo $row_DV['Mail']; ?></a></span><br />
                                                                                                      </p>
                                                                                                </div></td>
                                                                                    </tr>
                                                                              </table>
                                                                        </td>
                                                                  </tr><?PHP
                                                            }
                                                            while ($row_DV = mysql_fetch_assoc($DV));
                                                            ?>
<? $db_freeresult = liberadb($DV);
$db_cierra     = cierradb($db_conexion);
?>

                                                      </table>            </td>
                                          </tr>
                                          <tr>
                                                <td align="center" valign="top">&nbsp;</td>
                                                <td align="center">&nbsp;</td>
                                          </tr>
                                    </table>
                              </td>
                        </tr>
                        <tr></tr>
                        <tr>
                              <td><? include("footer.php"); ?> </td></tr>
                  </table>
            </div>
      </body>
</html>
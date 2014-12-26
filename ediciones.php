<?php
require_once './functions.php';
include ("includes/config.php");
?>
<!DOCTYPE html>
<html lang="es" class="no-js demo-1">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Vive Sat&eacute;lite</title>
        <meta name="Description" content="Revista Vive Satélite">
        <meta name="Keywords" content="revista vivesatelite, eventos en satelite, anuncios en satelite ">
        <meta name="author" content="Vive Satélite" />

        <!-- Hojas de estilo -->
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/bookblock.css" />

        <link href="../estilos.css" rel="stylesheet" type="text/css" />
        <link href="../css/dcmegamenu.css" rel="stylesheet" type="text/css" />

        <link href="../menu.css" rel="stylesheet" type="text/css" />
        <link href="../css/skins/white.css" rel="stylesheet" type="text/css" />


        <!-- custom demo style -->
        <link rel="stylesheet" type="text/css" href="css/revista.css" />
        <script src="js/modernizr.custom.js"></script>



        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type='text/javascript' src='../js/jquery.hoverIntent.minified.js'></script>
        <script type='text/javascript' src='../js/jquery.dcmegamenu.1.2.js'></script>
        <script type="text/javascript">
              $(document).ready(function ($) {
                  $('#mega-menu-tut').dcMegaMenu({
                      rowItems: '3',
                      speed: 'fast'
                  });
              });
        </script>



    </head>
    <body>




        <div class="container">





            <!-- Top Navigation -->
            <div class="codrops-top clearfix">

            </div>
            <header>

                <div class="logo"></div>

                <div class="wrap">
                    <?php include("menu.php"); ?>
                </div>


                <div class="pleca_azul_contacto">
                    <a href="vive-krd.php" target="_blank"><img src="../images/vivekrd.jpg" width="126" height="37" border="0" /></a><a href="https://www.facebook.com/pages/Vive-Satelite/274638523400" target="_blank"><img src="../images/siguenos_fb.jpg" width="107" height="37" border="0" /></a><a href="https://twitter.com/vivesatelite" target="_blank"><img src="../images/twitter.jpg" width="34" height="37" border="0" /></a>
                </div>


                <a href="http://vivesatelite.mx/default.php"><img src="images/logo.png" alt="Vive Satélite" class="especial_logo" /></a>

                <br/><br/><br/>
                <h1> <span class="azul"> &bull; </span> Ediciones anteriores <span class="azul"> &bull; </span> </h1>


            </header>
            <div class="main clearfix">



                <?php
                $directory = 'ediciones/img_revista_mes/';
                $scanned_directory = array_diff(scandir($directory, 1), array('..', '.'));
                foreach ($scanned_directory as $year) {
                      ?>
                      <div class="edicion">
                          <div class='year'>
                              <div class="titulo">A&ntilde;o <?php echo $year; ?></div>
                          </div>
                          <div class="meses">
                              <?php
                              $meses = $directory . $year;
                              $scanned_months = array_diff(scandir($meses), array('..', '.'));
                              natsort($scanned_months);
                              $meses = array_reverse($scanned_months);
                              foreach ($meses as $mes) {
                                    ?>

                                    <div class="revista_total"> 

                                        <div class="mes">
                                            <div class="titulo_mes"><?php echo getName($mes); ?></div>
                                        </div>
                                        <div class="portada">
                                            <a href="ediciones/show_revista.php?<?php echo "year=" . $year . "&month=" . $mes ?>">
                                                <img src="<?php echo $directory . $year . "/" . $mes . "/1.jpg" ?>"   class="img_mes" alt="edicion <?php echo $year . '-' . $mes; ?>"/>
                                            </a>
                                        </div>

                                    </div>


                                    <?php
                              }
                              ?>

                          </div>
                      </div>
                      <?php
                }
                ?>
            </div>

            <div id="class">
                <?php include("../footer.php"); ?>
            </div>

        </div>
    </body>
</html>
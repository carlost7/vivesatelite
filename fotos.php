<?php
include ("includes/config.php");
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Vive Satélite | Fotos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <meta name="description" content="Fotos de la revista Vive Satélite a lo largo de los años" />

        <meta name="keywords" content="revista, ViveSatélite, satélite, fotos, anuario"/>


        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/defaultGALERIA.css" />
        <link rel="stylesheet" type="text/css" href="css/componentGALERIA.css" />


        <!-- hOJAS DE ESTILOS MENU, HEADER,FOOTER -->

        <link href="estilos.css" rel="stylesheet" type="text/css" />
        <link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />

        <link href="menu.css" rel="stylesheet" type="text/css" />
        <link href="css/skins/white.css" rel="stylesheet" type="text/css" />
        
        <link type="text/css" rel="stylesheet" href="widget/css/rcarousel.css">
        
        <link type="text/css" rel="stylesheet" href="ediciones/css/revista.css">
        <link type="text/css" rel="stylesheet" href="ediciones/css/default.css">
        <link type="text/css" rel="stylesheet" href="ediciones/css/bookblock.css">


        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">	


            <header class="clearfix">



                <div class="logo"></div>

                <div class="wrap">
                    <?php include("menu.php"); ?>
                </div>


                <div class="pleca_azul_contacto">
                    <a href="vive-krd.php" target="_blank"><img src="images/vivekrd.jpg" width="126" height="37" border="0" /></a><a href="https://www.facebook.com/pages/Vive-Satelite/274638523400" target="_blank"><img src="images/siguenos_fb.jpg" width="107" height="37" border="0" /></a><a href="https://twitter.com/vivesatelite" target="_blank"><img src="images/twitter.jpg" width="34" height="37" border="0" /></a>
                </div>


                <a href="http://vivesatelite.mx/default.php"><img src="images/logo.png" alt="Vive Satélite" class="especial_logo2" /></a>

                <br/><br/> <br/>
                <h1> <span class="azul"> &bull; </span> Fotos <span class="azul"> &bull; </span> </h1>


                </header>
           
            <div class="main clearfix">

                <?php
                $directory = 'fotos/';
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
                              $counter = 0;
                              foreach ($meses as $mes) {
                                    $counter++;
                                    ?>
                                    <div class="thumb <?php echo "col-$counter"; ?>">
                                        <a href="galeriaFIX.php?<?php echo "year=" . $year . "&month=" . $mes ?>">
                                        <!-- <img src="<?php echo $directory . $year . "/" . $mes . "/1.jpg" ?>"   class="img_mes" alt="edicion <?php echo $year . '-' . $mes; ?>"/> -->
                                            <?php echo getName($mes); ?>
                                        </a>
                                    </div>
                                    <?php
                                    if ($counter == 4)
                                    {
                                          $counter = 0;
                                    }
                              }
                              ?>
                          </div>

                      </div>
                      <?php
                }
                ?>
                <div id="class">
                <?php include("footer.php"); ?>
            </div>

        </div><!-- /container -->
        
         </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/grid.js"></script>
        <script>
              $(function () {
                  Grid.init();
              });
        </script>
    </body>
</html>
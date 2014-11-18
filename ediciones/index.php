<?php
require_once 'funciones.php';
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
        <!-- custom demo style -->
        <link rel="stylesheet" type="text/css" href="css/revista.css" />
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">
            <!-- Top Navigation -->
            <div class="codrops-top clearfix">

            </div>
            <header>

                <a href="http://vivesatelite.mx/default.php"><img src="images/logo.png" alt="Vive Satélite" class="especial_logo" /></a>

                <br/>
                <h1> <span class="azul"> &bull; </span> Ediciones anteriores <span class="azul"> &bull; </span> </h1>


            </header>
            <div class="main clearfix">
                <?php
                $directory = 'img_revista_mes/';
                $scanned_directory = array_diff(scandir($directory, 1), array('..', '.'));
                foreach ($scanned_directory as $year) {
                      ?>
                      <div class="edicion">
                          <div class='year'>
                              <div class="titulo"><?php echo $year; ?></div>
                          </div>
                          <div class="meses">
                              <?php
                              $meses = $directory . $year;
                              $scanned_months = array_diff(scandir($meses), array('..', '.'));
                              natsort($scanned_months);
                              $meses = array_reverse($scanned_months);
                              foreach ($meses as $mes) {
                                    ?>
                                    <div class="mes">
                                        <div class="titulo"><?php echo getName($mes); ?></div>
                                    </div>
                                    <div class="portada">
                                        <a href="show_revista.php?<?php echo "year=".$year."&month=".$mes?>">
                                            <img src="<?php echo $directory . $year . "/" . $mes . "/1.jpg" ?>" alt="edicion <?php echo $year . '-' . $mes; ?>"/>
                                        </a>
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
        </div>
    </body>
</html>
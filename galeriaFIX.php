<?php
include ("includes/config.php");
require_once 'functions.php';

if (!isset($_GET['year']) || !isset($_GET['month']))
{
      echo "se requiere el a�o y mes para mostrar la revista";
      exit();
}
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


        <script src="js/modernizr.custom.js"></script>
    <script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-29633533-27', 'auto');   ga('send', 'pageview');  </script> </head>
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

                <h1> <span class="azul"> &bull; </span> <?php echo getName($_GET['month']) . " - " . $_GET['year']; ?> <span class="azul"> &bull; </span> </h1>

            </header>
            <div class="main">
                <ul id="og-grid" class="og-grid">
                    <?php
                    $directory = 'fotos/' . $_GET['year'] . "/" . $_GET['month'];
                    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
                    natsort($scanned_directory);

                    foreach ($scanned_directory as $image) {
                          ?>
                          <li>
                              <a href="#" data-largesrc="<?php echo $directory . "/" . $image; ?>" >
                                  <img src="<?php echo $directory . "/" . $image; ?>" alt="Vive Satelite galeria"/>
                              </a>
                          </li>
                          <?php
                    }
                    ?>
                </ul>
            </div>
            <div id="class">
                <?php include("footer.php"); ?>
            </div>

        </div><!-- /container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/grid.js"></script>
        <script>
              $(function () {
                  Grid.init();
              });
        </script>
    </body>
</html>
<?php
require_once 'functions.php';

   if(!isset($_GET['year']) || !isset($_GET['month'])){
         echo "se requiere el a�o y mes para mostrar la revista";
         exit();
   }
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
                <h1> <span class="azul"> &bull; </span> <?php echo getName($_GET['month'])." - ".$_GET['year'] ;?> <span class="azul"> &bull; </span> </h1>


            </header>
            <div class="main clearfix">
                <?php
                $directory = 'img_revista_mes/'.$_GET['year']."/".$_GET['month'];
                $scanned_directory = array_diff(scandir($directory), array('..', '.'));
                natsort($scanned_directory);
                ?>
                <div class="bb-custom-wrapper">

                    <div id="bb-bookblock" class="bb-bookblock">
                        <?php
                        foreach ($scanned_directory as $image) {
                              ?>
                              <div class="bb-item">
                                  <img src="<?php echo $directory."/".$image ;?>" alt="Vive Satélite"/>
                              </div>
                              <?php
                        }
                        ?>
                    </div>
                    <nav>
                        <a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
                        <a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
                        <a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
                        <a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
                    </nav>
                </div>
            </div>
        </div><!-- /container -->
        <script src="js/jquery.1.9.1_jquery_min.js"></script>
        <script src="js/jquerypp.custom.js"></script>
        <script src="js/jquery.bookblock.js"></script>
        <script>
              var Page = (function () {

                  var config = {
                      $bookBlock: $('#bb-bookblock'),
                      $navNext: $('#bb-nav-next'),
                      $navPrev: $('#bb-nav-prev'),
                      $navFirst: $('#bb-nav-first'),
                      $navLast: $('#bb-nav-last')
                  },
                  init = function () {
                      config.$bookBlock.bookblock({
                          speed: 800,
                          shadowSides: 0.8,
                          shadowFlip: 0.7
                      });
                      initEvents();
                  },
                          initEvents = function () {

                              var $slides = config.$bookBlock.children();

                              // add navigation events
                              config.$navNext.on('click touchstart', function () {
                                  config.$bookBlock.bookblock('next');
                                  return false;
                              });

                              config.$navPrev.on('click touchstart', function () {
                                  config.$bookBlock.bookblock('prev');
                                  return false;
                              });

                              config.$navFirst.on('click touchstart', function () {
                                  config.$bookBlock.bookblock('first');
                                  return false;
                              });

                              config.$navLast.on('click touchstart', function () {
                                  config.$bookBlock.bookblock('last');
                                  return false;
                              });

                              // add swipe events
                              $slides.on({
                                  'swipeleft': function (event) {
                                      config.$bookBlock.bookblock('next');
                                      return false;
                                  },
                                  'swiperight': function (event) {
                                      config.$bookBlock.bookblock('prev');
                                      return false;
                                  }
                              });

                              // add keyboard events
                              $(document).keydown(function (e) {
                                  var keyCode = e.keyCode || e.which,
                                          arrow = {
                                              left: 37,
                                              up: 38,
                                              right: 39,
                                              down: 40
                                          };

                                  switch (keyCode) {
                                      case arrow.left:
                                          config.$bookBlock.bookblock('prev');
                                          break;
                                      case arrow.right:
                                          config.$bookBlock.bookblock('next');
                                          break;
                                  }
                              });
                          };

                  return {init: init};

              })();
        </script>
        <script>
              Page.init();
        </script>
    </body>
</html>
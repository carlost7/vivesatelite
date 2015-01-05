<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta content="charset=utf-8">
        <title>FlexSlider 2</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

        <!-- Demo CSS -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <style type="text/css">
            body {
                background-color: #000;
            }
        </style>

        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <meta charset="UTF-8">
    <script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-29633533-27', 'auto');   ga('send', 'pageview');  </script> </head>
    <body class="loading">
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- FlexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>

        <script type="text/javascript">
              $(function () {
                  SyntaxHighlighter.all();
              });
              $(window).load(function () {
                  $('.flexslider').flexslider({
                      animation: "slide",
                      start: function (slider) {
                          $('body').removeClass('loading');
                      }
                  });
              });
        </script>

        <div class="contenedor_galeria">
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    $directory = 'galeria/';
                    $scanned_directory = array_diff(scandir($directory), array('..', '.'));

                    foreach ($scanned_directory as $image) {
                          ?>
                          <li>
                              <img src="<?php echo $directory . "/" . $image; ?>" alt="Vive Satelite galeria"/>
                          </li>
                          <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

    </body>
</html>
<?
include ("includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>rcarousel - margin between elements</title>
            <link type="text/css" rel="stylesheet" href="css/reset.css" />		
            <link type="text/css" rel="stylesheet" href="css/style.css" />		
            <link type="text/css" rel="stylesheet" href="widget/css/rcarousel.css" />
            <link href="estilos.css" rel="stylesheet" type="text/css" />
            <style type="text/css">
                  body {
                        background-color: #FFFFFF;
                  }
            </style>
      </head>
      <body>	<?
            $query        = "SELECT * FROM clientes WHERE Banner='1' AND status='1' ORDER BY RAND()";
            //Resultados de la consulta
            $query_result = mysql_query($query, $db_conexion) or die(mysql_error());
            ?>
            <div id="carousel">
                  <? while ($row          = mysql_fetch_assoc($query_result)) { ?> 
                        <? if ($row['pagina_web'] != '')
                        {
                              ?>
                              <a href="<?= $row['pagina_web']; ?>" target="_blank"><img src="logos/<?= $row['Imagen']; ?>" border="0" /></a>
                        <?
                        }
                        else
                        {
                              ?>
                              <img src="logos/<?= $row['Imagen']; ?>" border="0" />
      <? } ?>
<? } ?>
            </div>
            <a href="#" id="ui-carousel-next"><span>next</span></a>
            <a href="#" id="ui-carousel-prev"><span>prev</span></a>

            <script src="widget/lib/jquery-1.7.1.js" type="text/javascript"></script> 
            <script type="text/javascript" src="widget/lib/jquery.ui.core.js"></script>
            <script type="text/javascript" src="widget/lib/jquery.ui.widget.js"></script>
            <script type="text/javascript" src="widget/lib/jquery.ui.rcarousel.js"></script>
            <script type="text/javascript">
                          jQuery(function($) {
                          $("#carousel ").rcarousel({
                          auto: {
                          enabled: true,
                                  direction: "next",
                                  interval: 5000
                          },
                                  visible: 5,
                                  step: 5,
                                  margin: 60,
                                  width: 120,
                                  height: 120
                          });
                                  $( "#ui-carousel-next")
                                  .add("#ui-carousel-prev")
                                  .hover(
                                          function() {
                                          $(this).css( "opacity", 0.7);
                                          },
                                          function() {
                                          $(this).css( "opacity", 1.0);
                                          }
                                  );
                          });
            </script>
      </body>
</html>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47045595-1', 'servicampo.cl');
  ga('send', 'pageview');

</script>
<?php include("Conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Servicampo</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="css/movil.css" media="screen, projection" rel="stylesheet" type="text/css">
    <link href="css/estilo.css" media="screen, projection" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/secciones.css">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.glide.min.js"></script>
    <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="http://use.typekit.net/qyb8ood.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>

  <body class="home-page">
    <div class="contenedor_menu">
      <div class="container">
        <header id="site-header">
          <div class="menu-button"><img src="imagenes/logo.png"></div>
          <nav>
            <figure>
              <img src="imagenes/logo.png">
            </figure>
            <ul data-breakpoint="800" class="flexnav">
              <li><a href="index.php">INICIO</a></li>
              <li><a href="#">NOSOTROS</a>
                <ul>
                  <li><a href="mision.php">Misión</a></li>
                  <li><a href="clientes.php">Nuestros clientes</a></li>
                  <li><a href="certificacion.php">Certificación ISO</a></li>
                </ul>
              </li>
              <li><a href="#">SERVICIOS</a>
                <ul>
                  <?php
		$listado = "select * from  servicio";
		$sentencia = mysql_query($listado,$conn);
		while($rs=mysql_fetch_array($sentencia,$mibase)){
		?>
            <li><a href="detalleservicio.php?id=<?php echo $rs["id"]; ?>"><?php echo $rs["titulo"]; ?></a></li>
		<?php } ?>
                </ul>
              </li>
              <li><a href="#">BAÑOS</a>
                <ul>
                  <?php
    	$listado = "select * from  producto";
		$sentencia = mysql_query($listado,$conn);
		while($rs=mysql_fetch_array($sentencia,$mibase)){
	  	?>  
            <li><a href="detalleproducto.php?id=<?php echo $rs["id"]; ?>"><?php echo $rs["titulo"]; ?></a></li>
         <?php } ?>
                </ul>
              </li>
              <li><a href="#">CLIENTES</a>
                <ul>
                  <li><a href="solicitarcotizacion.php">Solicitar cotización</a></li>
                  <li><a href="ordendecompra.php">Generar orden de compra</a></li>
                  <li><a href="notificarpago.php">Notificar pago</a></li>
                  <li><a href="preguntasfrecuentes.php">Preguntas frecuentes</a></li>
                </ul>
              </li>
              <li><a href="contacto.php">CONTACTO</a></li>
            </ul>
          </nav>
        </header>
  			<video id="video" loop poster="http://jasonweaver.name/lab/flexiblenavigation/images/flexnav-placeholder.png"></video>
      </div>
    </div>

    <div class="cont">
      <article>
        <div class="contenido_inicio">
          <h3>
          <?php
	        $listado = "select * from  servicio where id ='$_GET[id]'";
	        $sentencia = mysql_query($listado,$conn);
	        while($rs=mysql_fetch_array($sentencia,$mibase)){
		      echo $rs["titulo"];?>
          </h3>

          <p><?php echo str_replace("\r\n","<br>",$rs["descripcion"]); } ?></p>
          <a href="imagenes/servicios/<?php echo $_GET["id"]; ?>.pdf" target="new">ver PDF</a>
        </div>

        <figure>
          <img src="imagenes/servicios/<?php echo $_GET["id"]; ?>.jpg">

          <div class="img_chica">
          <?php
          $listado = "select * from  galeria_servicio where servicio = '$_GET[servicios]' ";
			    $sentencia = mysql_query($listado,$conn);
			    while($rs=mysql_fetch_array($sentencia,$mibase)){?>
            <a class="fancybox" href="imagenes/galeria/<?php echo $rs["id"]; ?>.jpg" data-fancybox-group="gallery">
              <img src="imagenes/galeria/<?php echo $rs["id"]; ?>.jpg">
            </a>
          <?php } ?>
          </div>
        </figure>

      </article>
    </div>

    <!-- footer -->
    <footer>
      <div class="contenido_footer">
        <div class="bloque1">
        <?php $listadohjhj = "select * from destacados order by id desc limit 0,2  ";
	$sentenciahjhj = mysql_query($listadohjhj,$conn);
	if($rsds=mysql_fetch_array($sentenciahjhj,$mibase)){		 		
	?>
          <div class="contenido1">
            <h2><?php echo $rsds["titulo_destacado"]; ?></h2>
            <p> - <?php echo $rsds["contenido_destacado"]; ?></p>
            <a href="detallenoticia.php?id=<?php echo $rsds["id"] ?>">Ver Más</a>
          </div>
          <?php if($rsds=mysql_fetch_array($sentenciahjhj,$mibase)){ ?>
          <div class="contenido2">
            <h2><?php echo $rsds["titulo_destacado"]; ?></h2>
            <p><?php echo $rsds["contenido_destacado"]; ?></p>
            <a href="detallenoticia.php?id=<?php echo $rsds["id"] ?>">Ver Más</a>
          </div>
          <?php }} ?>
          <div class="contenido3">
            <a href="preguntasfrecuentes.php">Preguntas Frecuentes</a>
            <a href="noticias.php">Noticias</a>
          </div>
        </div>
        <div class="bloque2">
          <div class="contenido1">
            <h2>Productos</h2>
            <?php
    	$listado = "select * from  producto";
		$sentencia = mysql_query($listado,$conn);
		while($rs=mysql_fetch_array($sentencia,$mibase)){
	  	?>  
            <p> - <?php echo $rs["titulo"]; ?></p>
            <?php } ?>
          </div>
          <div class="contenido2">
            <h2>Servicios</h2>
            <?php
		$listado = "select * from  servicio";
		$sentencia = mysql_query($listado,$conn);
		while($rs=mysql_fetch_array($sentencia,$mibase)){
		?>
            <p> - <?php echo $rs["titulo"]; ?></p>
            <?php } ?>
          </div>
          <div class="contenido3">
            <a href="https://www.youtube.com/channel/UCfreDupfsfF8W7auxawiCrw/videos" target="new"><img src="imagenes/youtube.png"></a>
            <a href="https://www.facebook.com/pages/Servicampo/1375018456072141?ref=hl" target="new"><img src="imagenes/facebook.png"></a>
            <a href="https://twitter.com/servicampoCL" target="new"><img src="imagenes/twitter.png"></a>
          </div>
        </div>
        <div class="bloque3">
          <div class="contenido1">
            <img src="imagenes/logopie.png">
          </div>
          <div class="contenido2">
            <p><?php
			$listado = "select * from pie";
			$sentencia = mysql_query($listado,$conn);
			while($rs=mysql_fetch_array($sentencia,$mibase)){
		   		echo str_replace("\r\n","<br>",$rs["info"]);	 
		  	}
		  ?></p>
            
          </div>
          <div class="contenido3">
            <img src="imagenes/veritas.jpg">
          </div>
          <div class="contenido4">
            <a href="solicitarcotizacion.php">Solicitar Cotización</a>
            <a href="ordendecompra.php">Generar Orden de Compra</a>
            <a href="notificarpago.php">Generar Pago</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer -->
    
    <script type="text/javascript">//$.noConflict();</script>
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
      $('.slider').glide({
        autoplay: 3500,
        hoverpause: true, // set to false for nonstop rotate
        arrowRightText: '&rarr;',
        arrowLeftText: '&larr;'
      });
    });
    </script>
    <script type="text/javascript">
		
		var Video = {};

		Video.videoControls = function() {
			var $v = $('#video'),
				$play_button = $(".controls button");			
			$v.get(0).volume=0;
			$play_button.hide();
		  	$play_button.on("click", function() {
				if ( $(this).hasClass("play") ) {
					$v.get(0).play();
					$(this).removeClass("play").addClass("pause");
				} else if ( $(this).hasClass("pause") ) {
					$v.get(0).pause();
					$(this).removeClass("pause").addClass("play");
				}
			});

		    if ($v.attr('controls') !== 'true') {
		        $v.attr('controls', 'true');                    
		    }
		    $v.get(0).play();
		    $v.removeAttr('controls');
			$v.on("timeupdate", function() {
				if ($v.get(0).duration > 0) {
			        setTimeout(function() {
			          $play_button.fadeIn('slow');
			        }, 2000);				
				}
			});
		};

		jQuery(document).ready(function($) {
			// initialize video
			Video.videoControls();
			
			// initialize FlexNav
			$(".flexnav").flexNav();
		});
    </script>
    <script type="text/javascript">
    $(function(){
      $('.crsl-items').carousel({
        visible: 3,
        itemMinWidth: 180,
        itemEqualHeight: 370,
        itemMargin: 9,
      });
      
      $("a[href=#]").on('click', function(e) {
        e.preventDefault();
      });
    });
    </script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>
  </body>
</html>

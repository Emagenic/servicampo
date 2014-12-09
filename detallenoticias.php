<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Noticias Servicampo</title>
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
                  <li><a href="cliente.php">Nuestros clientes</a></li>
                  <li><a href="certificacion.php">Certificación ISO</a></li>
                </ul>
              </li>
              <li><a href="#">SERVICIOS</a>
                <ul>
                  <li><a href="#">Limpieza de fosas</a></li>
                  <li><a href="#">Arriendo de baños</a></li>
                  <li><a href="#">Mantención de plantas</a></li>
                  <li><a href="#">Mantención de baños</a></li>
                  <li><a href="#">Camiones hidrojet</a></li>
                  <li><a href="#">Varillajes y destapes</a></li>
                </ul>
              </li>
              <li><a href="#">BAÑOS</a>
                <ul>
                  <li><a href="#">Venta de Baños Químicos</a></li>
                  <li><a href="#">Bacterias y Enzimas Degradadoras</a></li>
                </ul>
              </li>
              <li><a href="#">CLIENTES</a>
                <ul>
                  <li><a href="#">Solicitar cotización</a></li>
                  <li><a href="#">Generar orden de compra</a></li>
                  <li><a href="#">Notificar pago</a></li>
                  <li><a href="#">Preguntas frecuentes</a></li>
                </ul>
              </li>
              <li><a href="contacto.php">CONTACTO</a></li>
            </ul>
          </nav>
        </header>
  			<video id="video" loop="true" poster="http://jasonweaver.name/lab/flexiblenavigation/images/flexnav-placeholder.png"></video>
      </div>
    </div>

    <div class="cont">
      <article>
        <div class="contenido_noticia">

        <div class="noticias">
          <figure>
            <img src="imagenes/noticias/2.jpg">
          </figure>  
          <div class="contenido_noticias">   
            <h4>Limpieza de Fosas</h4>     
            <p>Para una efectiva o real limpieza de pozo séptico o fosa séptica, usted debe asegurarse de que la succión (extracción) de los residuos, se haga a través de bombas de vacío. Un camión limpia fosas, para que haga bien este trabajo debe contar con este tipo de bombas. Lo que caracteriza a estas bombas, es que lo que hace es succionar aire del estanque del camión limpia fosas. Al abrir la llave que conecta el estanque por medio de la manguera de alta presión y el pozo o fosa séptica, el estanque que está con presión inversa, succiona las aguas servidas, riles, lodos, sedimentos , arena y todo lo que pueda desplazarse por el diámetro de la manguera. La gracia de esto, es que todos los elementos anteriormente descritos, nunca pasan a través de la bomba, por lo que es posible succionar correctamente todos los residuos no líquidos que hacen que la fosa séptica, pierda su capacidad de degradación, eliminación de olores y centro de acopio de los residuos sólidos.<br></br>

            Cabe destacar, que el tener por mucho tiempo las fosas sépticas con exceso de material sólido o carga orgánica no líquida, los sólidos suspendidos se empiezan a traspasar al sistema de drenaje haciendo que este pierda su vida útil. Una vez que el sistema de drenaje o pozo absorbente se obstruye con materiales sólidos, es muy difícil lograr recuperarlos, y por lo general no hay otro remedio, que hacer o construir uno nuevo.<br></br>

            Todos los camiones que posee Servicampo están equipados con este tipo de bombas, por lo cual le aseguramos que se hará un trabajo en que no quedarán residuos al realizar la limpieza de su pozo o fosa séptica.<br></br>

            Para lo anterior, contamos con distintos tamaños de camiones, que van desde los 14 m3, hasta los 2 m3. Adicionalmente muchos de ellos van equipados con equipos de destape de ductos, a través de sistema hidro jet (bombas impulsoras de agua a alta presión), capaces de limpiar y destapar los ductos, en caso que sea necesario.</p>

            <div class="likes_sociales">
              <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.servicampo.cl/detallenoticias.php?id=<?php echo $_GET["id"]; ?>" data-lang="es" data-size="large" data-hashtags="servicampo" data-dnt="true">Twittear</a>
            </div>
            <div class="likes_sociales">
              <div class="fb-like" data-href="http://www.servicampo.cl/detallenoticias.php?id=<?php echo $rs["id"]; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true">
              </div>  
            </div>

            <a href="dnoticias.php">VOLVER</a>
          </div> 
        </div>

      </article>
    </div>

    <!-- footer -->
    <footer>
      <div class="contenido_footer">
        <div class="bloque1">
          <div class="contenido1">
            <h2>Baños Químicos Portatiles</h2>
            <p> - El constante trabajo de mejorar nuestro servicio</p>
            <a href="#">Ver Más</a>
          </div>
          <div class="contenido2">
            <h2>Limpieza de Fosas</h2>
            <p>Para una efectiva o real limpieza de pozo séptico
            o fosa séptica, usted debe asegurarse de que
            la succión (extracción) de los residuos, se haga
            a través de bombas de vacío.</p>
            <a href="#">Ver Más</a>
          </div>
          <div class="contenido3">
            <a href="preguntasfrecuentes.php">Preguntas Frecuentes</a>
            <a href="noticias.php">Noticias</a>
          </div>
        </div>
        <div class="bloque2">
          <div class="contenido1">
            <h2>Productos</h2>
            <p> - Venta de Baños Químicos</p>
            <p> - Bacterias y Enzimas degradadoras</p>
          </div>
          <div class="contenido2">
            <h2>Servicios</h2>
            <p> - Limpieza de fosas sépticas</p>
            <p> - Arriendo de Baños Químicos</p>
            <p> - Mantención de plantas de tratamientos</p>
            <p> - Mantención de Baños Químicos</p>
            <p> - Camiones Hidrojet</p>
            <p> - Varillajes y Destapes</p>
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
            <p>Robles 133 - San Vicente de Tagua Tagua</p>
            <p>Sexta Región - Chile</p>
            <p>Casilla 300 - San Vicente de Tagua Tagua</p>
            <p>Fono: +56 (72) 2572595 - +56 (72) 2571729</p>
          </div>
          <div class="contenido3">
            <img src="imagenes/veritas.jpg">
          </div>
          <div class="contenido4">
            <a href="solicitarcotizacion.php">Solicitar Cotización</a>
            <a href="ordendecompra.php">Generar Orden de Compra</a>
            <a href="confirmarpago.php">Generar Pago</a>
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

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
</script>
  </body>
</html>

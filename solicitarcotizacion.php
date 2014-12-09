<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Cotización Servicampo</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="css/movil.css" media="screen, projection" rel="stylesheet" type="text/css">
    <link href="css/estilo.css" media="screen, projection" rel="stylesheet" type="text/css">
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
        <div class="contenido_inicio">
          <h3>SOLICITAR COTIZACIÓN</h3>
          <h5>Campos Obligatorios *</h5>
          <form action="index.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
            <input class="input" name="RazonSocial" type="text" placeholder="Razon Social *"/>
            <input class="input" name="Rut" type="text" placeholder="Rut *"/>  
            <input class="input" name="Giro" type="text" placeholder="Giro *"/>
            <input class="input" name="DireccionComercial" type="text" placeholder="Dirección Comercial *"/>
            <input class="input" name="NombreContacto" type="text" placeholder="Nombre Contacto *"/>
            <p class="titulo_select">Comuna *</p>
            <select name="Comuna" id="Comuna" class="select">
              <option value="Cauquenes">Cauquenes</option>
              <option value="Chanco">Chanco</option>
              <option value="Chépica">Chépica</option>
              <option value="Chimbarongo">Chimbarongo</option>
              <option value="Codegua">Codegua</option>
              <option value="Coinco">Coinco</option>
              <option value="Colbún">Colbún</option>
              <option value="Coltauco">Coltauco</option>
              <option value="Constitución">Constitución</option>
              <option value="Curepto">Curepto</option>
              <option value="Curicó">Curicó</option>
              <option value="Doñihue">Doñihue</option>
              <option value="Empedrado">Empedrado</option>
              <option value="Graneros">Graneros</option>
              <option value="Hualañé">Hualañé</option>
              <option value="La Estrella">La Estrella</option>
              <option value="Las Cabras">Las Cabras</option>
              <option value="Licantén">Licantén</option>
              <option value="Linares">Linares</option>
              <option value="Litueche">Litueche</option>
              <option value="Lolol">Lolol</option>
              <option value="Longaví">Longaví</option>
              <option value="Machalí">Machalí</option>
              <option value="Malloa">Malloa</option>
              <option value="Marchihue ">Marchihue </option>
              <option value="Maule ">Maule </option>
              <option value="Molina">Molina</option>
              <option value="Mostazal">Mostazal</option>
              <option value="Nancagua">Nancagua</option>
              <option value="Navidad">Navidad</option>
              <option value="Olivar">Olivar</option>
              <option value="Palmilla">Palmilla</option>
              <option value="Paredones">Paredones</option>
              <option value="Parral">Parral</option>
              <option value="Perlarco">Perlarco</option>
              <option value="Pellehue">Pellehue</option>
              <option value="Pencahue">Pencahue</option>
              <option value="Peralillo">Peralillo</option>
              <option value="Peumo">Peumo</option>
              <option value="Pichidegua">Pichidegua</option>
              <option value="Pichilemu">Pichilemu</option>
              <option value="Placilla">Placilla</option>
              <option value="Pumanque ">Pumanque </option>
              <option value="Quinta de Tilcoco">Quinta de Tilcoco</option>
              <option value="Rancagua">Rancagua</option>
              <option value="Ranco">Ranco</option>
              <option value="Rengo">Rengo</option>
              <option value="Requinoa">Requinoa</option>
              <option value="Retiro">Retiro</option>
              <option value="Río Claro">Río Claro</option>
              <option value="Romeral">Romeral</option>
              <option value="Sagrada Familia">Sagrada Familia</option>
              <option value="San Clemente">San Clemente</option>
              <option value="San Fernando ">San Fernando </option>
              <option value="San Javier">San Javier</option>
              <option value="San Rafael">San Rafael</option>
              <option value="San Vicente ">San Vicente </option>
              <option value="Santa Cruz">Santa Cruz</option>
              <option value="Talca ">Talca </option>
              <option value="Teno ">Teno </option>
              <option value="Vichuquén">Vichuquén</option>
              <option value="Villa Alegre">Villa Alegre</option>
              <option value="Yerbas Buenas">Yerbas Buenas</option>
            </select>
            <input class="input" name="Telefono" type="text" placeholder="Teléfono *"/>
            <input class="input" name="Celular" type="text" placeholder="Celular"/>
            <input class="input" name="E-Mail" type="text" placeholder="E-Mail *"/>
            <p class="titulo_select">Producto / Servicio *</p>
            <select name="Servicio" id="Servicio" class="select">
              <option value="Limpieza de Fosas">Limpieza de Fosas</option>
              <option value="Arriendo de Baños Químicos">Arriendo de Baños Químicos</option>
              <option value="Mantención de Baños Químicos">Mantención de Baños Químicos</option>
              <option value="Baños Químicos">Baños Químicos</option>
              <option value="Plantas de Tratamientos">Plantas de Tratamientos</option>
              <option value="Plantas de Tratamientos">Plantas de Tratamientos</option>
            </select>
            <textarea name="Comentarios" id="Mensaje" class="mensaje" placeholder="Comentarios *"></textarea>
            <input class="enviar" name="Enviar" type="submit" value="Enviar"/>
          </form>
        </div>
        <figure>
            <img src="imagenes/clientes/cotizar1.jpg">
            <br>
            <br>
            <img src="imagenes/clientes/cotizar2.jpg">
        </figure>
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
  </body>
</html>

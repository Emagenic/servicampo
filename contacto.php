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
    <title>Contacto Servicampo</title>
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
          <h3>CONTACTO</h3>
          <?php 
if ($_POST["Enviar"]){
		echo "<p>Su información ha sido enviada de manera satisfactoria. Responderemos a su petición, a la brevedad posible.";
		echo "<p>Gracias por confiar en nuestro trabajo.</p>";
	
	
	
		$destinatario = "contacto@servicampo.cl";
		$nombre = $_POST["Nombre"];
		$telefono = $_POST["Telefono"];
		$Celular = $_POST["Celular"];
		$mail = $_POST["Email"];
		$consulta = $_POST["mensaje"];
		$asunto = "Consulta sitio web"; 
		$cuerpo = "<table width=100% border=1 cellspacing=0 cellpadding=0>
		<tr><td>NOMBRE: $nombre</td></tr>
		<tr><td>TELEFONO: $telefono</td></tr>
		<tr><td>Celular: $Celular</td></tr>
		<tr><td>MAIL: $mail</td></tr>
		<tr><td>CONSULTA: $consulta</td></tr>
		</table>";
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
		$headers .= "From: $nombre <$mail>\r\n"; 
		mail($destinatario,$asunto,$cuerpo,$headers);
	} else {
 ?>
          
          
          
          
          <form action="contacto.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
            <input class="input" name="Nombre" type="text" placeholder="Nombre"/>
            <input name="Email" type="text" class="input" id="Email" placeholder="E-mail"/>  
            <input class="input" name="Telefono" type="text" placeholder="Teléfono"/>
            <input class="input" name="Celular" type="text" placeholder="Celular"/>
            <textarea name="mensaje" id="mensaje" class="mensaje" placeholder="Mensaje"></textarea>
            <input class="enviar" name="Enviar" type="submit" value="Enviar"/>
          </form>
          <?php } ?>
        </div>
        <figure>
            <a href="imagenes/mapa.jpg" target="new">
              <img src="imagenes/mapa.jpg">
            </a>
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
  </body>
</html>

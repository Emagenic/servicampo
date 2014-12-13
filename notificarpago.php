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
    <title>Notificar Pago Servicampo</title>
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
          <h3>CONFIRMAR PAGO</h3>
          <h5>Campos Obligatorios *</h5>
          <form action="notificarpago.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue"> 
            <input class="input" name="Nombre" type="text" placeholder="Nombre *"/>
            <input class="input" name="Apellido" type="text" placeholder="Apellido *"/>
            <input class="input" name="Empresa" type="text" placeholder="Empresa *"/>
            <input class="input" name="Factura" type="text" placeholder="Nº de Factura *"/>  
            <input class="input" name="Telefono" type="text" placeholder="Teléfono *"/>
            <input class="input" name="Celular" type="text" placeholder="Celular"/>
            <input class="input" name="mail" type="text" placeholder="E-Mail *"/>
            <p class="titulo_select">Producto / Servicio *</p>
            <select name="Producto" id="Producto" class="select">
              <option value="Limpieza de Fosas">Limpieza de Fosas</option>
              <option value="Arriendo de Baños Químicos">Arriendo de Baños Químicos</option>
              <option value="Mantención de Baños Químicos">Mantención de Baños Químicos</option>
              <option value="Baños Químicos">Baños Químicos</option>
              <option value="Plantas de Tratamientos">Plantas de Tratamientos</option>
              <option value="Plantas de Tratamientos">Plantas de Tratamientos</option>
            </select>
            <p class="titulo_select">Adjuntar Archivo</p>
            <div class="adjuntar">
              <input name="userfile" type="file">
              <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
            </div>
            <textarea name="Comentarios" id="Mensaje" class="mensaje" placeholder="Comentarios *"></textarea>
            <input class="enviar" name="Enviar" type="submit" value="Enviar"/>
          </form>
        </div>
        <figure>
            <img src="imagenes/clientes/3.jpg">
            <br>
            <br>
            <img src="imagenes/clientes/4.jpg">
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

<?php 
if ($_POST["Enviar"]){
  $ip = $_SERVER['REMOTE_ADDR']; 
  $idvar= 0;
  $listado = "select * from pagos where ip = '$ip' ";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $idvar = $idvar + 1;
  }
  $id = "O".$ip."-".$idvar ;
  function quitar ($texto) {
  $texto = str_replace (".", "", $texto);
  return $texto;
  }
  $id = quitar ($id);
  $nombre_archivo = $id;
  $destinatario = "ventas@servicampo";
  $nombre = "Confirmar pagos";
  $mail = "webmaster@servicampo.cl";
  $consulta = "$_POST[Nombre] acaba de enviar una confirmacion de pago, para ver el detalle haga clic 
  <a href=http://www.servicampo.cl/admin/verpago.php?id=$id>aca";
  $asunto = "Confirmar pago"; 
  $cuerpo = "<table width=100% border=1 cellspacing=0 cellpadding=0>
  <tr><td>Nombre: $nombre</td></tr>
  <tr><td>Comentario: $consulta</td></tr></table>";
  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
  $headers .= "From: $nombre <$mail>\r\n"; 
  mail($destinatario,$asunto,$cuerpo,$headers);
  
  $nombre_archivo = $id.$HTTP_POST_FILES['userfile']['name'];;
  
  $tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
  $tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
  
    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
  $fecha = date("Y-m-d");
    $insertar="INSERT INTO pagos (codigo, Nombre, Apellido,Empresa,Factura,Telefono,Celular,mail,Producto,Comentarios,ip, 
    nombrearchivo ) ";
    $insertar.= "VALUES( '$id','$fecha','$_POST[Nombre]', '$_POST[Apellido]', '$_POST[Empresa]', '$_POST[Factura]',
     '$_POST[Telefono]',
    '$_POST[Celular]', '$_POST[mail]', '$_POST[Producto]', '$_POST[Comentarios]','$ip','$nombre_archivo')";
    $sentencia=mysql_query($insertar,$conn)or die("Error al grabar : ".mysql_error);
    echo "<script> alert('Su notificacion de pago fue enviada correctamente'); </script>";
    }else{ 
      echo "<script> alert('Su notificacion de pago fue enviada pero el archivo adjunto no, envielo cor correo); </script>";
      echo $id;
  } 
}
?>

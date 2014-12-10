<!DOCTYPE html>
<html>
<head>
<?php include("Conexion.php"); ?>
<meta charset="UTF-8">
<title>servicampo</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body onLoad="MM_preloadImages('imagenes/fb2.png','imagenes/tw1.png')">
<div id="header">
  <table width="900" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="755">&nbsp;</td>
      <td width="145">&nbsp;</td>
    </tr>
    <tr>
      <td height="79" valign="top"><img src="imagenes/logo.png" width="674" height="155"></td>
      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="69%" height="53">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td width="23%">&nbsp;</td>
        </tr>
        <tr>
          <td height="57" align="right"><a href="https://www.facebook.com/pages/Servi-Campo/1375018456072141?ref=hl" target="new" onMouseOver="MM_swapImage('Image2','','imagenes/fb2.png',1)" onMouseOut="MM_swapImgRestore()"><img src="imagenes/fb1.png" name="Image2" width="33" height="32" border="0"></a></td>
          <td>&nbsp;</td>
          <td><a href="https://twitter.com/servicampoCL" target="new" onMouseOver="MM_swapImage('Image3','','imagenes/tw1.png',1)" onMouseOut="MM_swapImgRestore()"><img src="imagenes/tw2.png" name="Image3" width="33" height="32" border="0"></a></td>
        </tr>
        <tr>
          <td height="29" colspan="3" align="center" bgcolor="#33476E" class="vermas"><a href="http://www.mercantil.com/freecall/bypass.asp?meco_code=300267769" target="new" class="llamegratis"><strong class="llamegratis">Llame Gratis</strong></a></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<div id="nav">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="index.php" class="MenuBarHorizontal">Inicio</a>    </li>
    <li><a href="#" class="MenuBarItemSubmenu">Quienes Somos</a>
      <ul>
		<li><a href="mision.php">Misi&oacute;n - Porqu&eacute; Servicampo</a></li>
        <li><a href="cliente.php">Nuestro Clientes</a></li>
        <li><a href="certificacion.php">Certificaci&oacute;n ISO</a></li>
      </ul>
    </li>
    <li><a class="MenuBarItemSubmenu" href="#">Servicios</a>
      <ul>
      	<?php
    	$listado = "select * from  servicio";
		$sentencia = mysql_query($listado,$conn);
		while($rs=mysql_fetch_array($sentencia,$mibase)){
	  	?>
        	<li><a href="servicio.php?id=<?php echo $rs["id"] ?>"><?php echo $rs["titulo"] ?></a></li>
		<?php } ?>
      </ul>
    </li>
    <li><a href="#" class="MenuBarItemSubmenu">Ba&ntilde;os</a>
      <ul>
        <?php
    	$listado = "select * from  producto";
		$sentencia = mysql_query($listado,$conn);
		while($rs=mysql_fetch_array($sentencia,$mibase)){
	  	?>
        	<li><a href="productos.php?id=<?php echo $rs["id"] ?>"><?php echo $rs["titulo"] ?></a></li>
		<?php } ?>
</ul>
    </li>
    <li><a href="#" class="MenuBarItemSubmenu">Atencion al Cliente</a>
      <ul>
        <li><a href="solicitarcotizacion.php">Solicitar Cotizaci&oacute;n</a></li>
        <li><a href="orden/ordendecompra.php">Generar Orden de Compra</a></li>
       <li><a href="pagos/confirmar.php">Generar Pago - Notificaci&oacute;n de Pago</a></li>
        <li><a href="preguntasfrecuentes.php">Preguntas Frecuentes</a></li>
      </ul>
    </li>
    <li><a href="contacto.php">Contacto</a></li>
  </ul>
</div> 
<div class="separador1"></div>
<div id="contenido">
<p>&nbsp;</p>
<p>
  <?php
	$listado = "select * from  producto where id ='$_GET[id]'";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
?>
</p>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="20" valign="top">&nbsp;</td>
      <td width="860" valign="top"><table width="860" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"  background="imagenes/cont.png">&nbsp;</td>
          <td valign="top"  background="imagenes/cont.png">&nbsp;</td>
          <td  background="imagenes/cont.png">&nbsp;</td>
          <td valign="top" background="imagenes/cont.png">&nbsp;</td>
        </tr>
        <tr>
          <td width="10" valign="top"  background="imagenes/cont.png">&nbsp;</td>
          <td width="274" height="162" valign="top"  background="imagenes/cont.png"><img src="imagenes/productos/<?php echo $rs["id"]; ?>.png" width="274"></td>
          <td width="16"  background="imagenes/cont.png">&nbsp;</td>
          <td width="554" valign="top" background="imagenes/cont.png"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="3%" class="titulo">&nbsp;</td>
              <td width="97%" height="40" class="titulo"><?php echo $rs["titulo"]; ?></td>
            </tr>
            
            <tr>
              <td valign="top" class="texto">&nbsp;</td>
              <td height="45" valign="top" class="texto"><?php echo str_replace("\r\n","<br>",$rs["descripcion"]);	 ?></td>
            </tr>
            <tr>
              <td valign="bottom" class="texto">&nbsp;</td>
              <td height="45" valign="top" class="texto"><p><a href="imagenes/productos/<?php echo $rs["id"]; ?>.pdf" class="textolink2">Ver ficha (PDF)<br>
              <br>
              </a></p></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td valign="top"  background="imagenes/cont.png">&nbsp;</td>
          <td valign="top"  background="imagenes/cont.png">&nbsp;</td>
          <td  background="imagenes/cont.png">&nbsp;</td>
          <td valign="top" background="imagenes/cont.png"><table width="80%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="imagenes/productos/<?php echo $rs["id"]; ?>-1.png" width="150"></td>
              <td>&nbsp;</td>
              <td><img src="imagenes/productos/<?php echo $rs["id"]; ?>-2.png" width="150"></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
      <td width="20" height="162" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?php } ?>
</div>
<div class="separador1"></div>
<div id="footer">
  <?php $listadohjhj = "select * from articulo1  ";
	$sentenciahjhj = mysql_query($listadohjhj,$conn);
	if($rsds=mysql_fetch_array($sentenciahjhj,$mibase)){
		$titulo11 = str_replace("\r\n","<br>",$rsds["titulo11"]); 
		$descripcion11 = str_replace("\r\n","<br>",$rsds["descripcion11"]); 		
	}
	$listadohjhj = "select * from articulo2  ";
	$sentenciahjhj = mysql_query($listadohjhj,$conn);
	if($rsds=mysql_fetch_array($sentenciahjhj,$mibase)){
		$titulo22 = str_replace("\r\n","<br>",$rsds["titulo22"]); 
		$descripcion22 = str_replace("\r\n","<br>",$rsds["descripcion22"]); 		
	}
	?>
  <table width="900" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="299" height="275" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="8%">&nbsp;</td>
          <td width="92%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td valign="top" class="titulo"><span class="textolink"> <?php echo $titulo11; ?></span></td>
        </tr>
        <tr>
          <td height="60">&nbsp;</td>
          <td valign="top" class="texto"><p><?php echo $descripcion11; ?></p>
            <p>&nbsp;</p>
            <p class="vermas"><a href="articulo1.php" class="vermas">ver mas</a></p></td>
        </tr>
      </table>
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%">&nbsp;</td>
            <td width="92%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="top" class="titulo"><span class="textolink"><?php echo $titulo22; ?></span></td>
          </tr>
          <tr>
            <td height="60">&nbsp;</td>
            <td valign="top" class="texto"><p><?php echo $descripcion22; ?></p>
              <p>&nbsp;</p>
              <p class="vermas"><a href="articulo2.php" class="vermas">ver mas</a></p></td>
          </tr>
        </table></td>
      <td width="1" valign="top"><h3><img src="imagenes/lineapie.jpg" width="2" height="225"></h3></td>
      <td width="300" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="8%">&nbsp;</td>
          <td width="92%">&nbsp;</td>
        </tr>
        <tr>
          <td height="29">&nbsp;</td>
          <td valign="top" class="titulo">Productos</td>
        </tr>
        <tr>
          <td height="30">&nbsp;</td>
          <td valign="top" class="textolink"><ul>
            <li class="textolink">
              <?php
    	$listado = "select * from  producto";
		$sentencia = mysql_query($listado,$conn);
		while($rs=mysql_fetch_array($sentencia,$mibase)){
	  	?>
              <ul>
                <li class="textolink"><?php echo $rs["titulo"]; ?></li>
              </ul>
              <?php } ?>
            </li>
          </ul></td>
        </tr>
      </table>
        <table width="95%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%">&nbsp;</td>
            <td width="92%">&nbsp;</td>
          </tr>
          <tr>
            <td height="31">&nbsp;</td>
            <td valign="top" class="titulo">Servicios</td>
          </tr>
          <tr>
            <td height="72">&nbsp;</td>
            <td valign="top" class="texto"><?php
				$listado = "select * from  servicio";
				$sentencia = mysql_query($listado,$conn);
				while($rs=mysql_fetch_array($sentencia,$mibase)){
				?>
              <ul>
                <li class="textolink"><?php echo $rs["titulo"]; ?></li>
              </ul>
              <?php } ?></td>
          </tr>
        </table></td>
      <td width="1" valign="top"><img src="imagenes/lineapie.jpg" width="2" height="225"></td>
      <td width="299" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="8%">&nbsp;</td>
          <td width="92%">&nbsp;</td>
        </tr>
        <tr>
          <td height="43">&nbsp;</td>
          <td valign="top" class="titulo"><img src="imagenes/logopie.png" width="161" height="30"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td rowspan="2" valign="top" class="texto"><?php
			$listado = "select * from pie";
			$sentencia = mysql_query($listado,$conn);
			while($rs=mysql_fetch_array($sentencia,$mibase)){
		   		echo str_replace("\r\n","<br>",$rs["info"]);	 
		  	}
		  ?></td>
        </tr>
        <tr>
          <td height="41">&nbsp;</td>
        </tr>
      </table>
        <table width="95%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%">&nbsp;</td>
            <td width="92%">&nbsp;</td>
          </tr>
          <tr>
            <td height="31">&nbsp;</td>
            <td valign="top" class="titulo">Servicios</td>
          </tr>
          <tr>
            <td height="72">&nbsp;</td>
            <td valign="top" class="texto"><ul>
              <li class="textolink"><a href="solicitarcotizacion.php" class="textolink"><strong>Solicitar  Cotización</strong></a></li>
            </ul>
              <ul>
                <li class="textolink"><a href="ordendecompra.php" class="textolink"><strong>Generar Orden de  Compra</strong></a></li>
              </ul>
              <ul>
                <li class="textolink"><a href="confirmarago/confirmar.php" class="textolink"><strong>Generar  Pago</strong></a></li>
              </ul>
              <ul>
                <li class="textolink"><a href="preguntasfrecuentes.php" class="textolink"><strong>Preguntas  Frecuentes</strong></a></li>
              </ul></td>
          </tr>
        </table></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
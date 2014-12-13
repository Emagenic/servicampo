<?php
session_start();
include("../Conexion.php");
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
	
	if ($_POST["Grabar"]){
		$editar="update inicio set titulo_inicio  = '$_POST[titulo_inicio]',descripcion_inicio  = '$_POST[descripcion_inicio]',titulo_destacado1_inicio  = '$_POST[titulo_destacado1_inicio]',
		descripcion_destacado1_inicio  = '$_POST[descripcion_destacado1_inicio]',descripcion_destacado1_largo  = '$_POST[descripcion_destacado1_largo]',titulo_destacado2_inicio  = '$_POST[titulo_destacado2_inicio]', 
		descripcion_destacado2_inicio  = '$_POST[descripcion_destacado2_inicio]',descripcion_destacado2_largo  = '$_POST[descripcion_destacado2_largo]',titulo_destacado3_inicio  = '$_POST[titulo_destacado3_inicio]',descripcion_destacado3_inicio  = '$_POST[descripcion_destacado3_inicio]',descripcion_destacado3_largo  = '$_POST[descripcion_destacado3_largo]' ";
		$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../font/stylesheet.css" rel="stylesheet" type="text/css">
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<title>Inicio</title></head>

<body>
  <?php
	$listado = "select * from inicio";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		
		
	
	?>
  <form id="form1" name="form1" method="post" action="inicio.php">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="40" colspan="2"><div align="center" class="titulo">Inicio</div></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td align="right" valign="top"><span class="textolink">Titulo</span></td>
        <td valign="top"><span class="textolink"> 
        <input name="titulo_inicio" type="text" id="titulo_inicio" value="<?php echo $rs["titulo_inicio"]; ?>">
        </span></td>
      </tr>
      <tr>
        <td width="38%" height="179" align="right" valign="top"><div align="right"><span class="textolink">Descripcion&nbsp;</span></div></td>
        <td width="62%" valign="top">
          <span class="textolink">
          <textarea name="descripcion_inicio" cols="50" rows="8" class="boton3" id="descripcion_inicio"><?php echo $rs["descripcion_inicio"];	 ?> </textarea>
        </span></td>
      </tr>
      <tr>
        <td align="right" valign="top"><span class="textolink">Titulo Destacado 1</span></td>
        <td valign="top"><span class="textolink">
          <input name="titulo_destacado1_inicio" type="text" id="titulo_destacado1_inicio" value="<?php echo $rs["titulo_destacado1_inicio"]; ?>">
        </span></td>
      </tr>
      <tr>
        <td height="98" align="right" valign="top"><div align="right"><span class="textolink">Descripcion &nbsp;</span></div></td>
        <td valign="top"><span class="textolink">
          <textarea name="descripcion_destacado1_inicio" cols="50" rows="5" class="boton3" id="descripcion_destacado1_inicio"><?php echo $rs["descripcion_destacado1_inicio"];	 ?> </textarea>
        </span></td>
      </tr>
      <tr>
        <td height="155" align="right" valign="top"><div align="right"><span class="textolink">Descripcion Larga &nbsp;</span></div></td>
        <td valign="top"><span class="textolink">
          <textarea name="descripcion_destacado1_largo" cols="50" rows="10" class="boton3" id="descripcion_destacado1_largo"><?php echo $rs["descripcion_destacado1_largo"];	 ?> </textarea>
        </span></td>
      </tr>
      <tr>
        <td align="right" valign="top"><span class="textolink">Titulo Destacado 2</span></td>
        <td valign="top"><span class="textolink">
          <input name="titulo_destacado2_inicio" type="text" id="titulo_destacado2_inicio" value="<?php echo $rs["titulo_destacado2_inicio"]; ?>">
        </span></td>
      </tr>
      <tr>
        <td height="104" align="right" valign="top"><div align="right"><span class="textolink">Descripcion &nbsp;</span></div></td>
        <td valign="top"><span class="textolink">
          <textarea name="descripcion_destacado2_inicio" cols="50" rows="5" class="boton3" id="descripcion_destacado2_inicio"><?php echo $rs["descripcion_destacado2_inicio"];	 ?> </textarea>
        </span></td>
      </tr>
      <tr>
        <td height="156" align="right" valign="top"><div align="right"><span class="textolink">Descripcion Larga &nbsp;</span></div></td>
        <td valign="top"><span class="textolink">
          <textarea name="descripcion_destacado2_largo" cols="50" rows="10" class="boton3" id="descripcion_destacado2_largo"><?php echo $rs["descripcion_destacado2_largo"];	 ?> </textarea>
        </span></td>
      </tr>
      <tr>
        <td align="right" valign="top"><span class="textolink">Titulo Destacado 3</span></td>
        <td valign="top"><span class="textolink">
          <input name="titulo_destacado3_inicio" type="text" id="titulo_destacado3_inicio" value="<?php echo $rs["titulo_destacado3_inicio"]; ?>">
        </span></td>
      </tr>
      <tr>
        <td height="102" align="right" valign="top"><div align="right"><span class="textolink">Descripcion &nbsp;</span></div></td>
        <td valign="top"><span class="textolink">
          <textarea name="descripcion_destacado3_inicio" cols="50" rows="5" class="boton3" id="descripcion_destacado3_inicio"><?php echo $rs["descripcion_destacado3_inicio"]; ?> </textarea>
        </span></td>
      </tr>
      <tr>
        <td height="155" align="right" valign="top"><div align="right"><span class="textolink">Descripcion Larga &nbsp;</span></div></td>
        <td valign="top"><span class="textolink">
          <textarea name="descripcion_destacado3_largo" cols="50" rows="10" class="boton3" id="descripcion_destacado3_largo"><?php echo $rs["descripcion_destacado3_largo"];	 ?> </textarea>
        </span></td>
      </tr>
       <tr>
        <td height="269" align="right" valign="top"><div align="right" class="textolink"><a href="../imagenes/Upload_foto.php?id=inicio">Cambiar Imagen</a> &nbsp;Inicio </div></td>
        <td valign="top"><img src="../imagenes/inicio.jpg" width="320" height="250"  alt=""/></td>
      </tr>
      <tr>
        <td height="226" align="right" valign="top"><div align="right" class="textolink"><a href="../imagenes/destacados/Upload_foto.php?id=1">Cambiar Imagen</a> &nbsp;Destacado 1 </div></td>
        <td valign="top"><img src="../imagenes/destacados/1.jpg" width="250" height="200"  alt=""/></td>
      </tr>
      <tr>
        <td height="220" align="right" valign="top"><div align="right" class="textolink"><a href="../imagenes/destacados/Upload_foto.php?id=2">Cambiar Imagen</a>&nbsp;Destacado 2</div></td>
        <td valign="top"><img src="../imagenes/destacados/2.jpg" width="250" height="200"  alt=""/></td>
      </tr>
      <tr>
        <td height="112" align="right" valign="top"><div align="right" class="textolink"><a href="../imagenes/destacados/Upload_foto.php?id=3">Cambiar Imagen</a> Destacado 3&nbsp;</div></td>
        <td valign="top"><img src="../imagenes/destacados/3.jpg" width="250" height="200"  alt=""/></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="texto">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <p>
            <label>
              <input name="Grabar" type="submit" class="enviar" id="Grabar" value="Grabar" />
            </label>
          </p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="titulo">Volver</a></p>
<?php } ?>
</form>

</body>
</html>
<?php } ?>
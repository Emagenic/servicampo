<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update mision set titulo  = '$_POST[titulo]',descripcion  = '$_POST[descripcion]' ";
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
<title>Mision</title></head>

<body>
  <?php
	$listado = "select * from mision";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
?>
  <form id="form1" name="form1" method="post" action="mision.php">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="40" colspan="2"><div align="center" class="titulo">Mision</div></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td align="right" valign="top"><span class="textolink">Titulo</span></td>
        <td valign="top"><span class="textolink">
        <input name="titulo" type="text" id="titulo" value="<?php echo $rs["titulo"]; ?>">
        </span></td>
      </tr>
      <tr>
        <td width="36%" height="112" align="right" valign="top"><div align="right"><span class="textolink">Descripcion&nbsp;</span></div></td>
        <td width="64%" valign="top">
          <span class="textolink">
          <textarea name="descripcion" cols="50" rows="8" class="boton3" id="descripcion"><?php echo $rs["descripcion"];	 ?> </textarea>
        </span></td>
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
</form>
<?php } ?>
</body>
</html>
<?php } ?>
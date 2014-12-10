<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$insertar="INSERT INTO galeria_productos (titulo,url,Tipo,servicio) 
		VALUES('$_POST[titulo]','$_POST[url]','$_POST[Tipo]','$_GET[servicios]')";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un nuevo link: ".mysql_error);

}
if ($_GET["fun"] =="eli"){
	$insertar = "delete from galeria_productos WHERE id = '".$_GET["foto"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un mensaje: ".mysql_error);
	$dir="../galeria/productos/". $_GET["foto"] .".jpg";
	if(file_exists($dir)) { 
		if(unlink($dir)) 
			print ""; 
		} else 
			print "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<link href="../letras.css" rel="stylesheet" type="text/css" />
<link href="../css/letras.css" rel="stylesheet" type="text/css" />
<link href="letras.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="galeria_productos.php?servicios=<?php echo $_GET["servicios"]; ?>">
  <table width="50%" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="textotitulospropiedades">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="19%" class="texto_g"><span class="textolink">Titulo</span></td>
          <td width="81%">            <span class="textolink">
            <input name="titulo" type="text" id="titulo" size="50" />
          </span></td>
        </tr>
        <tr>
          <td><span class="textolink">URL</span></td>
          <td><span class="textolink">
            <input name="url" type="text" id="url" size="50" />
          </span></td>
        </tr>
        <tr>
          <td><span class="textolink">Tipo imagen</span></td>
          <td>            <span class="textolink">
            <select name="Tipo" id="Tipo">
              <option value="imagen" selected="selected">imagen</option>
              <option value="video">video</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="textolink">
            <input name="Grabar" type="submit" class="botones" id="Grabar" value="Grabar" />
          </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<p align="center"><a href="producto.php" class="textolink">Volver</a></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php 
$listado = "select * from  galeria_productos where servicio = '$_GET[servicios]' ";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
  <tr>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeria/productos/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeria/productos/<?php echo $rs["id"] ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center">
        <a href="galeria_productos.php?id=<?php echo $_GET["id"]; ?>&fun=eli&foto=<?php  echo $rs["id"];  ?>&servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Eliminar</a>
        </td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeria/productos/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeria/productos/<?php echo $rs["id"] ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria_productos.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeria/productos/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeria/productos/<?php echo $rs["id"] ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria_productos.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeria/productos/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeria/productos/<?php echo $rs["id"] ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria_productos.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="textolink">Eliminar</a></td>
      </tr>
    </table></td>
  </tr>
  <?php }}}} ?>
</table>
<p>&nbsp;</p>
</body>
</html><?php } ?>
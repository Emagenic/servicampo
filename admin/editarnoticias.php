<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE destacados SET titulo_destacado ='".$_POST["titulo_destacado"]."',contenido_destacado ='".$_POST["contenido_destacado"]."',contenido_completo ='".$_POST["contenido_completo"]."'   WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un servicio: ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="noticias.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Editar</title>
<link href="../Letras.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php 
$listado = "select * from  destacados where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form id="form1" name="form1" method="post" action="editarnoticias.php?id=<?php echo $_GET["id"]; ?>">
  <table width="50%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="19%" rowspan="3" valign="top"><table width="60%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="39"><div align="center" class="textoinfo"><a href="../imagenes/noticias/Upload_foto.php?id=<?php echo $rs["id"]; ?>" class="textos">SUBIR FOTO</a></div></td>
          </tr>
          <tr>
            <td><span class="textobox"><img src="../imagenes/noticias/<?php echo $rs["id"]; ?>.jpg" width="264" height="264" /></span></td>
          </tr>
      </table></td>
      <td width="81%" valign="top"><p>
        <label>
        <input type="submit" name="Modificar" id="Modificar" value="Modificar" />
        </label>
      </p>
          <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="16%" align="right" valign="top" class="textobox">&nbsp;</td>
              <td width="84%" valign="top" class="Letras1"><label for="titulo_destacado"></label></td>
            </tr>
            <tr>
              <td height="35" align="right" valign="top" class="textos">Titulo </td>
              <td valign="top" class="Letras1"><input name="titulo_destacado" type="text" id="titulo_destacado" value="<?php echo $rs["titulo_destacado"]; ?>" /></td>
            </tr>
            <tr>
              <td valign="top" class="textobox"><div align="right" class="titulo"><span class="textos">Descripcion </span></div></td>
              <td valign="top" class="Letras1"><span class="textobox">
                <textarea name="contenido_destacado" cols="40" rows="5" class="Letras1" id="contenido_destacado"><?php echo $rs["contenido_destacado"]; ?></textarea>
              </span></td>
            </tr>
            <tr>
              <td valign="top" class="textobox"><div align="right" class="titulo"><span class="textos">Descripcion Completa </span></div></td>
              <td valign="top" class="Letras1"><span class="textobox">
                <textarea name="contenido_completo" cols="40" rows="5" class="Letras1" id="contenido_completo"><?php echo $rs["contenido_completo"]; ?></textarea>
              </span></td>
            </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"></div></td>
    </tr>
    <tr>
      <td height="130" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>
<?php } ?>
<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE pregunta SET pregunta ='$_POST[pregunta]',respuesta ='$_POST[respuesta]' WHERE id  = '$_GET[id]' " ;
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar : ".mysql_error);


?>
	<script language="javascript">
	window.opener.document.location="preguntasfrecuentes.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<title>Editar equipo</title>
<link href="../font/stylesheet.css" rel="stylesheet" type="text/css">
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php 
$listado = "select * from  pregunta where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form id="form1" name="form1" method="post" action="editar.php?id=<?php echo $_GET["id"]; ?>">
  <table width="50%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="81%" valign="top"><p>
        <label>
          <input name="Modificar" type="submit" class="enviar" id="Modificar" value="Modificar" />
          </label>
        </p>
        <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="29%" align="right" valign="top" class="textobox">&nbsp;</td>
            <td width="71%" valign="top" class="Letras1"><label for="pregunta"></label></td>
          </tr>
          <tr>
            <td height="37" valign="top" class="textobox"><div align="right" class="titulo"><span class="texto">Producto</span><span class="titulos"> &nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <input name="pregunta" type="text" class="Letras1" id="cliente4" value="<?php echo $rs["pregunta"]; ?>" size="40" />
            </span></td>
          </tr>
          <tr>
            <td height="102" valign="top" class="textobox"><div align="right" class="titulo"><span class="texto">Descripci&oacute;n </span><span class="titulos"> &nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="respuesta" cols="40" rows="5" class="Letras1" id="respuesta"><?php echo $rs["respuesta"]; ?></textarea>
            </span></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>
<?php } ?>
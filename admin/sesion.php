<?php
session_start();
include("../Conexion.php");
if($_GET["fun"]=="cerrar"){
	unset($_SESSION["$nusuario"]);
}
if($_POST["Entrar"]){	
	$password = md5($_POST["password_txt"]);
	$listado = "select * from 	usuario where usuario = '$_POST[nusuario_txt]' and password  = '$password'  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$_SESSION["$nusuario"] = $rs["usuario"];
	} else {
		echo "Usuario o password no corresponde";
	}
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador</title>

<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center">&nbsp;</p>
<div align="center">
  
  <p>
    
    <span class="titulo">
    <?php if ($_SESSION["$nusuario"] == "") { ?>
  <strong class="titulos">Inicie sesion para modificar el contenido</strong></span></p>
  <p>&nbsp;</p>
</div>
<form id="form1" name="form1" method="post" action="sesion.php">
  <div align="center">
    <table width="226" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="80" class="texto" >Usuario</td>
        <td width="146"><label>
          <input name="nusuario_txt" type="text" class="textobox"  id="nusuario_txt" size="15" />
        </label></td>
      </tr>
      <tr>
        <td height="12" colspan="2" ></td>
      </tr>
      <tr>
        <td class="texto" >Password</td>
        <td><input name="password_txt" type="password" class="textobox"  id="password_txt" size="15" /></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <input name="Entrar" type="submit" class="enviar" id="Entrar" value="Entrar" />
            </label>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <p>
    <?php } else  { ?></p>
  <p>&nbsp;</p>
  <p class="titulo"><strong class="botonera">Usuario</strong>: <?php echo $_SESSION["$nusuario"]; ?></p>
  <p class="titulos">&nbsp;</p>
  <table width="200" border="1" cellspacing="1" cellpadding="0">
    <tr>
      <td><table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="30" align="left" bgcolor="#20357D"><div align="center" class="llamegratis"><strong>MENU PRINCIPAL</strong></div></td>
        </tr>
        
        <tr>
          <td height="5" align="left" bgcolor="#FFFFFF"></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="textolink"><a href="inicio.php" class="textolink">Inicio</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="textolink"><a href="mision.php" class="textolink">Mision</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="textolink"><a href="cliente.php" class="textolink">Nuestros clientes</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="textolink"><a href="certificacion.php" class="textolink">Certificaciones</a></td>
        </tr>
        <tr>
          <td height="0" align="center" bgcolor="#FFFFFF"  class="textolink"><span class="textolink"><a href="servicio.php" class="textolink">Servicios</a></span></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="textolink"><a href="producto.php" class="textolink">Productos</a></td>
        </tr>
        <tr>
          <td height="0" align="center" bgcolor="#FFFFFF"  class="textolink"><a href="preguntasfrecuentes.php" class="textolink">Preguntas frecuentes</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="admin"><span class="textolink"><a href="pie.php" class="textolink">Informacion pie</a></span></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="textolink"><a href="noticias.php" class="textolink">Noticias</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="admin"><a href="preguntasfrecuentes.php" class="textolink2">Preguntas frecuentes</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="admin"><a href="solicitudesdecotizacion.php" class="textolink3">Solicitudes de cotizaciones</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="admin"><a href="ordendecompras.php" class="textolink3">Ordenes de compra</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="admin"><a href="pagos.php" class="textolink3">Notificaciones de pago</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="texto"><a href="galeria_servicios.php" class="textolink3"></a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="admin">&nbsp;</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="contacto"><a href="cambiopassword.php" class="textolink" ><strong>Cambio de password</strong></a></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF" class="textos" ><a href="sesion.php?fun=cerrar" class="textolink" ><strong>Cerrar sesion</span></strong></a></td>
        </tr>
        
      </table></td>
    </tr>
  </table>
</div>
<?php } ?>
</body>
</html>

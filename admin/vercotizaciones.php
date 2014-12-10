<?php 
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
<!-- 
function openWindow(url, name) {
popupWin = window.open(url, name, 'scrollbars,resizable,width=650,height=500')
}

// -->


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>


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
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<style type="text/css">
<!--

-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--

-->
</style>

<style type="text/css">
body {
	background-color: #FFF;
	text-align:center;
}
</style>
<title>Servicios</title></head>

<body>

  
<p align="center">
  <?php 
$listado = "select * from  solicitud_cotizacion where codigo = '$_GET[id]' ";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
</p>
<p>&nbsp;</p>
<p align="center">
<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="141" height="19">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="993">&nbsp;</td>
  </tr>
  <tr>
    <td width="141" valign="top" class="titulo"><span class="textolink2">Cotización</span></td>
    <td width="36" valign="top" class="obligatorios">&nbsp;</td>
    <td width="993" valign="top" class="obligatorios">&nbsp;</td>
  </tr>
  <tr>
    <td width="141" class="texto">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="993">&nbsp;</td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">Nombre</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["Nombre"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">Apellido</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["Apellido"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">Empresa</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["Empresa"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">Comuna</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["Comuna"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">Teléfono</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["Telefono"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">Celular</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["Celular"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">E-mail</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["mail"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="30" align="right" class="texto"><span class="textolink2">Producto / Servicio</span></td>
    <td width="36">&nbsp;</td>
    <td width="993"><span class="textolink2"><?php echo $rs["Servicio"];  ?></span></td>
  </tr>
  <tr>
    <td width="141" height="112" align="right" valign="top" class="texto">
      <p>&nbsp;</p>
      <p><span class="textolink2">Comentarios</span></p></td>
    <td width="36">&nbsp;</td>
    <td width="993" valign="top">
    <p>&nbsp;</p>
    <p><span class="textolink2"><?php echo $rs["Comentarios"];  ?></span></p></td>
  </tr>
</table>
</p>
<?php } ?>
<p>&nbsp;</p>
<p class="textotitulo2">&nbsp;</p>



</body>
</html>
<?php } ?>
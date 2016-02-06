<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/javascript.js"></script>
<link href="css/iniciar.css" rel="stylesheet" />
<link href="css/animate.css" rel="stylesheet" /><link href="css/encabezado.css" rel="stylesheet" />
<title>Inglesnology</title>
<?php
if(isset($_POST["submit"]))
{
require("procesar.php");
}
?>
</head>
<body>


<div id="superior" >
<a href="index.html"><div class="superiorblockimagen"><img  src="img/logotipo.png" height="30"  alt="logo" /></div></a>
<a href="Inglesnology.html"><div class="superiorblock">Acerca de nosotros</div></a>
 <a href="descargas.html"><div class="superiorblock">Descargas</div></a>
<div class="superiorblockbuscador" style="">
<!-- Búsqueda Google -->
 <FORM method=GET action="http://www.google.es/search">             
        <INPUT TYPE=text class="buscador" style="background:url(img/buscar.png) no-repeat;" id="s" name="q" value="" size="50" />                
        <input type=radio style="display:none"  name=sitesearch value="http://www.Inglesnology.net" checked />      
        <INPUT type=submit class="botonbuscar"  id="x" name=btnG VALUE="Buscar" /> 
    </FORM> 
<!-- Búsqueda Google --></div>
<a id="veriniciarsesion"><div class="superiorblock">Iniciar sesión</div></a>
<a href="registrarse.php"><div class="superiorblockregistro superiorblock" style="border-right: 1px solid rgba(0,0,0,0.15);color:white;">Regístrate</div></a>
</div>

<table id="iniciarsesion"><td align="center">
<div class="iniciarsesionpage">
<img src="img/x.png" id="cerrariniciarsesion" alt="x" />
<table style="width:100%;">
<td style="width:50%;" valign="top">
Inicia sesión con:<br /><br />
<img src="img/facebooksign.png"  height="70"   /><br />
<img src="img/logingoogle.png"  height="70" alt="google" /></td>
<td style="width:50%;border-left:1px solid rgba(0,0,0,0.2);padding-left:40px;"  valign="top">
 
Inicia sesión utilizando una cuenta de Inglesnology:<br /><br />
 <form action="script_acceso_usuario.php" style="font-size:14px;" method="post" name="frm_ingreso" id="frm_ingreso">
               <font style="display:block;">Teléfono, correo o usuario</font>
                <input name="usuario" type="text" class="caja" style="width:240px;" />        
                <font style="display:block;">Contraseña</font> 
                <input  name="contrasena" type="password" class="caja" style="width:240px;" />  
                <input type="submit"  class="botoninicio" value="Iniciar sesión" />
                <a style="float:right"><input type="checkbox"/><font id="terminos" style="font-size:14px;color:rgba(102,102,102,1);">Recordar Sesion</font></a>
                <a href="olvidar.html"><font id="olvidar">¿Olvidaste tu contraseña?</font></a>
                 <a href="registrarse.php"><font id="olvidar" style="margin:0px;">¿Eres nuevo? Regístrate</font></a>
                  </form>
</td></table>
</div>
</td></table>

<br /><br /><br />
<form   method="post" action="">
  <table id="registro">
  
  <td><h1 id="titulo" >Que Esperas Unete Hoy!!</h1></td>
  <tr></tr>
  <td><font id="texto">Nombre completo</font>
  <input name="nombres" type="text" class="caja" /></td>
  <tr></tr>
  <td><font id="texto">Dirección de correo electrónico</font>
  <input type="text" name="correo" class="caja" /></td>
  <tr></tr>
  <td><font id="texto">Crea una contraseña</font>
  <input type="password" name="contrasena" class="caja" /></td>
  <tr></tr>
  <td><font id="texto">Elige tu nombre de usuario</font>
  <input type="text" name="usuario" class="caja" /></td>
   <tr></tr>
  <td><input type="checkbox" name="check1"/><font id="terminos" style="font-size:16px;color:rgba(102,102,102,1);">Aceptas los terminos y Condiciones</font></td>
   <tr></tr>
  <td><input type="submit" name="submit" class="boton" value="Crear mi cuenta" ></td>
  <tr></tr>
  <td><font id="terminos">Al registrarte, aceptas las Condiciones de Servicio y la Política de Privacidad, incluyendo el Uso de Cookies. Otros podrán encontrarte por correo electrónico o por número de teléfono cuando sea proporcionado.</font></td>
   </table>
   </form>
    
    <center>
    <table id="bienvenida">
    <td>
   <h1 id="bienvenido"> Bienvenido a Inglesnology</h1>
    </td><tr></tr>
    <td><font id="textobienvenida" >Conéctate con tus amigos y otras personas fascinantes. Obtén actualizaciones instantáneas de las cosas que te interesan. Mira los eventos que se están desarrollando, en tiempo real, desde todos los ángulos.</font></td>
    </table></center>
   
    
    <table id="sobre" ><td align="center">
    <a href="Inglesnology.html"><font id="acercade">Inglesnology</font></a>
    <a href="cualesnuestroobjetivo.html"><font id="acercade">¿Cuál es nuestro objetivo?</font></a>
    <a href="porqueaprenderingles.html"><font id="acercade">¿Por qué aprender inglés?</font></a>
    <a href="sergioramirez.html"><font id="acercade">Desarrollador</font></a>
    <a href="ayuda.html"><font id="acercade">Ayuda</font></a>
    <a href="registrarse.php"><font id="acercade">Registrarte</font></a>
   <a href="https://www.facebook.com/Inglesnologypro">  <font id="acercade">Facebook</font></a>
   <a href="https://www.twitter.com/Inglesnologypro"> <font id="acercade">Twitter</font></a>
   <a href=""> <font id="acercade">Google+</font></a>
   <a href="descargas.html"> <font id="acercade">Descargas</font></a>
    </td></table>
   <script>
   
    
$("#veriniciarsesion").click(function(e) {
        $('#iniciarsesion').show();
    });
	$("#cerrariniciarsesion").click(function(e) {
          $('#iniciarsesion').hide();
    });
    </script>
  
</body>
</html>

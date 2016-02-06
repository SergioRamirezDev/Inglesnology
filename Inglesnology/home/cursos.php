
<?php require("usuario.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   
   <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
     
   <link href="css/informacion.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inglesnology</title>
<link href="../img/icono.png" rel="icon" />
</head>
<body>

<table id="superior" >
<td valign="middle">
<a href="index.php"><img src="img/logotipo.png" height="30" id="logo" alt="logo" /></a>
</td>
<td  align="right" >
<table><td>
<img src="img/perfil.jpg" id="perfil"   align="middle" /></td><td>
<font id="titulotexto" style="background:url(img/triangulo.png) no-repeat right;padding-right:30px;"><?php echo $nombre ?><a href="desconectando.php" id="olvidar"><img src="img/256.png" width="17" alt="salir" /></a></font><br /><font class="correotexto"><?php echo $correo ?></font></td></table>

</a>
</td>
</table>
</div>



     <br /><br /><br />
     
     
     
   <table class="cuerpo"><td valign="top" align="center" >
  <table class="tablaprincipal">
  <td>
  <ul class="menu">
  <li class="menuprincipal sesion" style="background-color:white;"> <img src="img/perfil.jpg" id="perfil" style="float:left;height:40px;"  alt="logo" />Bienvenido, <?php echo $_SESSION['nombres'];?></li>
  </ul>
  </td>
  <tr></tr>
  <td>
  <ul class="menu">
  <li id="practicas">Practicas</li>
  </ul>
  <ul class="menu" id="practicasmenu">
  <a href="verbos.php"><li  class="menuprincipal menuopcion">verbos</li></a>
  <a href="vocabulario.php"><li class="menuprincipal menuopcion">vocabulario</li></a>
  <a href="gramatica.php"><li class="menuprincipal final menuopcion">gramatica</li></a>
  </ul>
  </td><tr></tr>
  <td>
  <ul class="menu">
  <li id="lecturas">Lecturas</li>
  </ul><ul class="menu final" id="lecturasmenu">
  <a href="libros.php"><li class="menuprincipal menuopcion">Libros</li></a>
  <a href="cuentos.php"><li class="menuprincipal menuopcion">Cuentos</li></a>
    <a href="palabrasdelvocabulario.php"><li class="menuprincipal menuopcion">palabras del Vocabulario</li></a>

  </ul>
  </td>
  </table>
  
  
  </td><td valign="top" align="center" width="700">
  
  
  
  <ul class="menu" style="margin:20px 0px 0px 0px;" width="700">
  <li class="normal redondeararriva" style="background-color:white;cursor:default;">Cursos de Ingles</li>
  </ul>
  <br />
  <ul class="menu">
 
  <li class="comentarios" >
  <table style="width:100%;">
  <td align="center">
 <a  id="l1" href="https://www.youtube.com/embed/a0vy3cPjWVg" target="peliculas" ><img src="cursos/1.png" class="libro" alt="imagen" /></a>
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/kVURE4VoE1Q" target="peliculas"><img src="cursos/2.png" class="libro" alt="imagen" /></a
 >
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/uuRRwrRjZIY" target="peliculas"><img src="cursos/3.png" class="libro" alt="imagen" /></a
 >
 </td><tr></tr>
 <td align="center">
 <a  id="l1" href="https://www.youtube.com/embed/SZJiqC8omO8" target="peliculas"><img src="cursos/4.png" class="libro" alt="imagen" /></a>
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/FtDWFclC9As" target="peliculas"><img src="cursos/5.png" class="libro" alt="imagen" /></a
 >
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/t1XXoq6WTJA" target="peliculas"><img src="cursos/6.png" class="libro" alt="imagen" /></a
 >
 </td><tr></tr>
 <td align="center">
 <a  id="l1" href="https://www.youtube.com/embed/Sz59TmXfJ4M" target="peliculas"><img src="cursos/7.png" class="libro" alt="imagen" /></a>
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/LA8RF1dYEO8" target="peliculas"><img src="cursos/8.png" class="libro" alt="imagen" /></a
 >
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/ia5xnfCgPhM" target="peliculas"><img src="cursos/9.png" class="libro" alt="imagen" /></a
 >
 </td><tr></tr>
 <td align="center">
 <a  id="l1" href="https://www.youtube.com/embed/ReOCGehJSsI" target="peliculas"><img src="cursos/10.png" class="libro" alt="imagen" /></a>
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/q2kx_AolOB4" target="peliculas"><img src="cursos/11.png" class="libro" alt="imagen" /></a
 >
 </td><td align="center">
 <a  id="l2" href="https://www.youtube.com/embed/NdZDqIiO4CY" target="peliculas"><img src="cursos/12.png" class="libro" alt="imagen" /></a
 >
 </td>
 </table>
  </li>

  </ul>
  
  
  
  
  </td><td valign="top" align="center">
   <table class="tablaprincipal"><td>
  <ul class="menu">
  <li id="descargas">Multimedia</li>
  </ul><ul class="menu" id="descargasmenu"> <a href="cursos.php"><li class="menuprincipal menuopcion">Cursos de Ingles</li></a> <a href="peliculas.php"><li class="menuprincipal menuopcion">Peliculas</li></a>
  </ul>
  </td><tr></tr><td>
  <ul class="menu">
  <li id="descargas">Cursos online</li>
  </ul><ul class="menu" id="descargasmenu">
  <a href="claseonline.php"><li class="menuprincipal menuopcion">Aprende ahora</li></a>
  </ul>
  </td>
  </table></td>
  </table>
  
  <div class="abrirvideo l1" align="center">
  <a target="peliculas" href="img/loading.gif"><img src="img/x.png"  class="xplayer" alt="x" /></a>
<center>
<div class="videoplayer">
<iframe  name="peliculas" frameborder=0 marginwidth=0 marginheight=0 scrolling="no" allowfullscreen="true" src="img/loading.gif" width=900 height=550></iframe>

<div id="vertical-scrollbar-demo" class="video gray-skin demo">

<a href="https://www.youtube.com/embed/a0vy3cPjWVg" target="peliculas" >
<div class="listacurso">
<img src="cursos/default1.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 1</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/kVURE4VoE1Q" target="peliculas">
<div class="listacurso">
<img src="cursos/default2.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 2</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/uuRRwrRjZIY" target="peliculas">
<div class="listacurso">
<img src="cursos/default3.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 3</font><br /><font class="videopersona">
-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/SZJiqC8omO8" target="peliculas">
<div class="listacurso">
<img src="cursos/default4.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 4</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/FtDWFclC9As" target="peliculas">
<div class="listacurso">
<img src="cursos/default5.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 5</font><br /><font class="videopersona">-Aprende inglés </font>
</div>
</a>

<a href="https://www.youtube.com/embed/t1XXoq6WTJA" target="peliculas">
<div class="listacurso">
<img src="cursos/default6.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 6</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/Sz59TmXfJ4M" target="peliculas">
<div class="listacurso">
<img src="cursos/default7.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 7</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/LA8RF1dYEO8" target="peliculas">
<div class="listacurso">
<img src="cursos/default8.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 8</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/ia5xnfCgPhM" target="peliculas">
<div class="listacurso">
<img src="cursos/default9.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 9</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/ReOCGehJSsI" target="peliculas">
<div class="listacurso">
<img src="cursos/default10.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 10</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/q2kx_AolOB4" target="peliculas">
<div class="listacurso">
<img src="cursos/default11.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 11</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>

<a href="https://www.youtube.com/embed/NdZDqIiO4CY" target="peliculas">
<div class="listacurso">
<img src="cursos/default12.jpg" class="videoimagencurso" alt="imagen" /><font class="videotitulo">Conversación para aprender inglés con subtitulos. Capítulo 12</font><br /><font class="videopersona">-Aprende inglés</font>
</div>
</a>




</div>
  
  <script >
    $('#l1,#l2').click(function(e) {
    $('.l1').show();
});
$('.xplayer').click(function(e) {
    $('.l1').hide();
});
  
</script>
  
  
     
</body>
</html>
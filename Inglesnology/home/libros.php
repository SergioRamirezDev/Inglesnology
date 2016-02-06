
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
     
     
     
   <table class="cuerpo"><td valign="top" align="center">
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
  <li class="normal redondeararriva" style="background-color:white;cursor:default;">Libros</li>
  </ul>
  <br />
  <ul class="menu">
  
  <li class="comentarios" >
  <table style="width:100%;">
  <tr></tr><td align="center" class="titulolibros">
     <a id="l1"><img class="libro" src="libros/39steps2.jpg" alt="imagen" /><br />
    39 steps</a>
<div class="abrirlibro l1">
<object class="pdf" data="libros/39_steps.pdf">
</object>
</div>
   </td><td align="center">
    <a id="l2">
      <img class="libro" src="libros/adventuressherlock2.jpg" alt="imagen" /><br />
     adventures sherlock</a>
     <div class="abrirlibro l2">
<object class="pdf" data="libros/adventures_sherlock.pdf">
</object>
</div>

  </td><td align="center">
  <a id="l3">
  <img class="libro" src="libros/copperfield2.jpg" alt="imagen" /><br />
david copperfield</a>
<div class="abrirlibro l3">
<object class="pdf" data="libros/david_copperfield.pdf">
</object>
</div>
 
</td> <tr></tr><td align="center">
<a id="l4">
  <img class="libro" src="libros/dracula2.jpg" alt="imagen" /><br />
     dracula</a>
     <div class="abrirlibro l4">
<object class="pdf" data="libros/dracula.pdf">
</object>
</div>

   </td><td align="center">
   <a id="l5">
   <img class="libro" src="libros/greatexpectactions2.jpg" alt="imagen" /><br />
     great expectactions</a>
      <div class="abrirlibro l5">
<object class="pdf" data="libros/greatexpectations.pdf">
</object>
</div>
   
  </td><td align="center">
  <a id="l6">
   <img class="libro" src="libros/janeeyre2.jpg" alt="imagen" /><br />
jane eyre</a>
<div class="abrirlibro l6">
<object class="pdf" data="libros/jane_eyre.pdf">
</object>
</div>

</td> <tr></tr><td align="center">
<a id="l7">
 <img class="libro" src="libros/junglebook2.jpg" alt="imagen" /><br />jungle book</a>
     <div class="abrirlibro l7">
<object class="pdf" data="libros/jungle_book.pdf">
</object>
</div>
 
   </td><td align="center">
   <a id="l8">
    <img class="libro" src="libros/kingsolomon2.jpg" alt="imagen" /><br />
 king solomon</a>
      <div class="abrirlibro l8">
<object class="pdf" data="libros/solomon_mines.pdf">
</object>
</div>
  
  </td><td align="center">
  <a id="l9">
   <img class="libro" src="libros/mobydick2.jpg" alt="imagen" /><br />
moby dick</a>
<div class="abrirlibro l9">
<object class="pdf" data="libros/mobydick.pdf">
</object>
</div>

</td> <tr></tr><td align="center">
<a id="l10">
  <img class="libro" src="libros/olivertwist2.jpg" alt="imagen" /><br />
     oliver twist</a>
     <div class="abrirlibro l10">
<object class="pdf" data="libros/oliver_twist.pdf">
</object>
</div>

   </td><td align="center">
   <a id="l11">
      <img class="libro" src="libros/pimpernel2.jpg" alt="imagen" /><br />
     scarlet pimpernel</a>
      <div class="abrirlibro l11">
<object class="pdf" data="libros/scarlet_pimpernel.pdf">
</object>
</div>

  </td><td align="center">
  <a id="l12">
   <img class="libro" src="libros/prejudice2.jpg" alt="imagen" /><br />
pride and prejudice</a>
<div class="abrirlibro l12">
<object class="pdf" data="libros/pride_prejudice.pdf">
</object>
</div>

</td> <tr></tr><td align="center">
<a id="l13">
 <img class="libro" src="libros/sensesensibility2.jpg" alt="imagen" /><br />
    sense and sensibility</a>
     <div class="abrirlibro l13">
<object class="pdf" data="libros/sense_sensibility.pdf">
</object>
</div>
 
   </td><td align="center">
   <a id="l14">
    <img class="libro" src="libros/study2.jpg" alt="imagen" /><br />study scarlet</a>
  
  <div class="abrirlibro l14">
<object class="pdf" data="libros/study_scarlet.pdf">
</object>
</div>
  </td><td align="center">
  <a id="l15">
  <img class="libro" src="libros/sawyer2.jpg" alt="imagen" /><br />
tom sawyer</a>
<div class="abrirlibro l15">
<object class="pdf" data="libros/tom_sawyer.pdf">
</object>
</div>
 
</td> <tr></tr><td align="center">
<a id="l16">
<img class="libro" src="libros/treasure2.jpg" alt="imagen" /><br />treasure island</a>
     <div class="abrirlibro l16">
<object class="pdf" data="libros/treasure_island.pdf">
</object>
</div>
  
   </td><td align="center">
   <a id="l17">
      <img class="libro" src="libros/wuthering2.jpg" alt="imagen" /><br />wuthering heights</a>
      <div class="abrirlibro l17">
<object class="pdf" data="libros/wuthering_heights.pdf">
</object>
</div>
  </td></table>
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
  
  <script>
  $('#l1').click(function(e) {
    $('.l1').show();
});
$('.l1').click(function(e) {
    $(this).hide();
});
  $('#l2').click(function(e) {
    $('.l2').show();
});
$('.l2').click(function(e) {
    $(this).hide();
});
  $('#l3').click(function(e) {
    $('.l3').show();
});
$('.l3').click(function(e) {
    $(this).hide();
});
  $('#l4').click(function(e) {
    $('.l4').show();
});
$('.l4').click(function(e) {
    $(this).hide();
});
  $('#l5').click(function(e) {
    $('.l5').show();
});
$('.l5').click(function(e) {
    $(this).hide();
});
  $('#l6').click(function(e) {
    $('.l6').show();
});
$('.l6').click(function(e) {
    $(this).hide();
});
  $('#l7').click(function(e) {
    $('.l7').show();
});
$('.l7').click(function(e) {
    $(this).hide();
});
  $('#l8').click(function(e) {
    $('.l8').show();
});
$('.l8').click(function(e) {
    $(this).hide();
});
  $('#l9').click(function(e) {
    $('.l9').show();
});
$('.l9').click(function(e) {
    $(this).hide();
});
  $('#l10').click(function(e) {
    $('.l10').show();
});
$('.l10').click(function(e) {
    $(this).hide();
});
  $('#l11').click(function(e) {
    $('.l11').show();
});
$('.l11').click(function(e) {
    $(this).hide();
});
  $('#l12').click(function(e) {
    $('.l12').show();
});
$('.l12').click(function(e) {
    $(this).hide();
});
  $('#l13').click(function(e) {
    $('.l13').show();
});
$('.l13').click(function(e) {
    $(this).hide();
});
  $('#l14').click(function(e) {
    $('.l14').show();
});
$('.l14').click(function(e) {
    $(this).hide();
});
  $('#l15').click(function(e) {
    $('.l15').show();
});
$('.l15').click(function(e) {
    $(this).hide();
});
  $('#l16').click(function(e) {
    $('.l16').show();
});
$('.l16').click(function(e) {
    $(this).hide();
});
  $('#l17').click(function(e) {
    $('.l17').show();
});
$('.l17').click(function(e) {
    $(this).hide();
});
  </script>
  
     
</body>
</html>
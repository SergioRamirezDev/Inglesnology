
<?php require("usuario.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <script src="js/jquery-1.11.1.min.js"></script>
  
   
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
  <li class="normal redondeararriva" style="background-color:white;cursor:default;">Peliculas</li>
  </ul>
  <br />
  <ul class="menu">

  <li class="comentarios" >
  <table style="width:100%;"><td colspan="3">
  En esta parte, analizamos extractos de guiones de películas para entender el uso del inglés cotidiano auténtico. Lee los fragmentos e intenta comprenderlos. Luego, lee la explicación del vocabulario. Finalmente, vuelve a leer el texto.<br />
<br />
Recomendaciones para aprender inglés con películas<br />
<br />
Elige escenas cortas, retrocede la película y vuelve a mirarlas. Para eso, marca el comienzo de la escena pulsando el botón "A-B" de tu reproductor de DVD. Cuando termine la escena, pulsa el mismo botón y se volverá a repetir la escena automáticamente.<br />
<br />
Desactiva los subtítulos en español. Si aún no logras entender el diálogo, activa la opción "CC" (Closed Caption) en tu televisor para ver los subtítulos en inglés.<br />
<br />
Intenta mirar películas que conozcas y hayas visto. Dado que ya sabes lo que sucede en la trama, podrás concentrarte en el vocabulario y las expresiones usadas en las conversaciones.
<br /><br />
Repite las frases que escuchas y si no entiendes algo, utiliza un diccionario.
<br /><br />
Presta atención a la pronunciación y la entonación. De esta forma, irás entrenando el oído para identificar las palabras, lo cual ciertamente te ayudará a mejorar tu comprensión del inglés.
  </td><tr><td align="center">
 <a  id="l1" href="http://tumi.tv/embed-f1mz9lvctt6k.html" target="peliculas" ><img src="peliculas/in_time_10663.jpg" class="libro" alt="imagen" /></a>
 </td><td align="center">
 <a  id="l2" href="http://tumi.tv/embed-3npct9mxctc2.html" target="peliculas"><img src="peliculas/56ba2b407b2d1870dc93ca1c7aaddf93.jpg" class="libro" alt="imagen" /></a
 >
 </td><td align="center">
 <a  id="l2" href="http://allmyvideos.net/embed-c01e32ogi0ee.html" target="peliculas"><img src="peliculas/89985c05ebb1e86a69e002538e0d29bd.jpg" class="libro" alt="imagen" /></a
 >
 </td><tr></tr>
 <td align="center">
 <a  id="l1" href="http://allmyvideos.net/embed-phjwtoyewz1b.html" target="peliculas"><img src="peliculas/df79ba2b1c942a83259c0b678d5d2aa1.jpg" class="libro" alt="imagen" /></a>
 </td><td align="center">
 <a  id="l2" href="http://tumi.tv/embed-0gus7e1yqblq.html" target="peliculas"><img src="peliculas/a4bde17387bacc9cd2aedd5897c70bd9.jpg" class="libro" alt="imagen" /></a
 >
 </td><td align="center">
 <a  id="l2" href="http://allmyvideos.net/embed-uy558zxe83bc.html" target="peliculas"><img src="peliculas/thumb3-mv5bmji3otiwntmzof5bml5banbnxkftztgwnzezotcxmde@._v1_sy317_cr8,0,214,317_[1]-1396978865.jpg" class="libro" alt="imagen" /></a
 >
 </td><tr></tr>
 <td align="center">
 <a  id="l1" href="http://allmyvideos.net/embed-opxsv5khx94h.html" target="peliculas"><img src="peliculas/1ea2c3ec2f3ae6d7143358f1da82e993.jpg" class="libro" alt="imagen" /></a>
 </td><td align="center">
 <a  id="l2" href="http://allmyvideos.net/embed-qgsqvzdor0os.html" target="peliculas"><img src="peliculas/a37640285a6537bc1d34a1dc7b7fa3fd.jpg" class="libro" alt="imagen" /></a
 >
 </td><td align="center">
 <a  id="l2" href="http://allmyvideos.net/embed-kwkrwwth2ri6.html" target="peliculas"><img src="peliculas/thumb3-noche_en_el_museo-952091815-large-1382429955.jpg" class="libro" alt="imagen" /></a
 >
 </td>
 </table>
  <div class="abrirvideo l1" align="center">
  <a target="peliculas" href="img/loading.gif"><img src="img/x.png"  class="xplayer" alt="x" /></a>
<center>
<div class="videoplayer">
<iframe  name="peliculas" frameborder=0 marginwidth=0 marginheight=0 scrolling="no" allowfullscreen="true" src="img/loading.gif" width=900 height=550></iframe>

<div id="vertical-scrollbar-demo" class="video gray-skin demo">

<a href="http://tumi.tv/embed-f1mz9lvctt6k.html" target="peliculas" >
<div class="lista">
<img src="peliculas/img/in_time_10663.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">In Time</font><br /><font class="videopersona">Ambientada en una socicorreo futura. El hallazgo de una fórmula contra el envejecimiento trae consigo no sólo superpoblación, sino también la transformación del tiempo en moneda de cambio que permite sufragar tanto lujos como necesidades. Los ricos pueden vivir para siempre, pero los demás tendrán que negociar cada minuto de vida, y los pobres mueren jóvenes..</font>
</div>
</a>

<a href="http://tumi.tv/embed-3npct9mxctc2.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/56ba2b407b2d1870dc93ca1c7aaddf93.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">Big Hero 6</font><br /><font class="videopersona">Situado en una metrópolis ficticia llamada San Fransokyo (una mezcla de San Francisco y Tokio), Hiro Hamada es un chico prodigio de 14 años, que ha creado un robot llamado Baymax para llenar el vacío que le dejó la muerte de su hermano Tadashi, mientras éste estaba a punto de descubrir una red criminal liderada por un misterioso villano enmascarado llamado Yokai.</font>
</div>
</a>

<a href="http://allmyvideos.net/embed-c01e32ogi0ee.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/89985c05ebb1e86a69e002538e0d29bd.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">Los pingüinos de Madagascar</font><br /><font class="videopersona">
Spin-off de 'Madagascar' protagonizado por los pingüinos de la isla. Las más divertidas aves encubiertas del mundo del espionaje: Capitán, Kowalski, Rico y Soldado. Son la élite de la élite y juntos unen sus fuerzas a una elegante organización encubierta llamada Viento Norte, liderada por el apuesto y musculoso Agente Clasificado..</font>
</div>
</a>

<a href="http://allmyvideos.net/embed-phjwtoyewz1b.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/df79ba2b1c942a83259c0b678d5d2aa1.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">Operación cacahuete</font><br /><font class="videopersona">A finales de los años 50, en un pueblo de Virginia, la traviesa ardilla Surly y su compinche, la rata Buddy, planean atracar un almacén de nueces.</font>
</div>
</a>

<a href="http://tumi.tv/embed-0gus7e1yqblq.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/a4bde17387bacc9cd2aedd5897c70bd9.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">El gato</font><br /><font class="videopersona">	Sinopsis
Mike Myers protagoniza esta película en el papel del travieso visitante felino con sombrero que enseña a dos niños que "es divertido divertirse pero hay que saber cómo hacerlo".  </font>
</div>
</a>

<a href="http://allmyvideos.net/embed-uy558zxe83bc.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/thumb3-mv5bmji3otiwntmzof5bml5banbnxkftztgwnzezotcxmde@._v1_sy317_cr8,0,214,317_[1]-1396978865.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">L'extravagant voyage du jeune et prodigieux T.S. Spivet</font><br /><font class="videopersona">T. S. Spivet es un genio de doce años que vive en un rancho en Montana con su peculiar familia. Su gran talento para la cartografía pronto tiene recompensa. Una institución científica le concede un prestigioso premio y, armado con una pequeña maleta, se dispone a cruzar el país para recogerlo.</font>
</div>
</a>

<a href="http://allmyvideos.net/embed-opxsv5khx94h.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/1ea2c3ec2f3ae6d7143358f1da82e993.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">Looney Tunes: Back in Action</font><br /><font class="videopersona"> El pato Lucas, cansado de estar siempre a la sombra del conejo Bugs Bunny, ha decidido abandonar el estudio de la Warner Bros. Para ello cuenta con la ayuda de Kate Houghton, una vicepresidenta con muy poco sentido del humor que ordena al guarda jurado DJ Drake que lo eche de allí.</font>
</div>
</a>

<a href="http://allmyvideos.net/embed-qgsqvzdor0os.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/a37640285a6537bc1d34a1dc7b7fa3fd.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">Mickey, Donald, Goofy: The Three Musketeers</font><br /><font class="videopersona"> Desde que eran pequeños, Donald, Goofy y Mickey sueñan con ser mosqueteros, pero su falta de habilidad hace que hasta Pete, su capitán, no confíe en ellos. La reina Minnie vive en palacio junto a su doncella Daisy. Un día, alguien amenaza con matarla y ésta pide a Pete que sus mosqueteros la protejan.</font>
</div>
</a>

<a href="http://allmyvideos.net/embed-kwkrwwth2ri6.html" target="peliculas">
<div class="lista">
<img src="peliculas/img/thumb3-noche_en_el_museo-952091815-large-1382429955.jpg" class="videoimagen" alt="imagen" /><font class="videotitulo">Noche en el museo</font><br /><font class="videopersona">Larry Daley (Stiller) es un soñador de buen corazón que se cree destinado al éxito. Cuando acepta un trabajo de guardia de seguridad en un museo, empiezan a ocurrir cosas extraordinarias: gladiadores, guerreros, toda clase de personajes épicos empiezan a cobrar vida. Para resolver el caos, Larry le pide consejo a la figura de cera del Presidente Teddy Roosevelt (Williams), que intentará ayudarlo a salvar el museo.</font>
</div>
</a>

</div>
</div>
</center>
  </div>
  </li>

  </ul>
  
  
  
  
  </td><td valign="top" align="center" width="300">
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

<?php require("usuario.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   
   <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
     
   <link href="css/informacion.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inglesnology</title>
 <style>
#botonIniciar, #botonDetener{
	width:99%;
	border:0px;
	color:white;
	font-size:20px;
	outline:none;
	height:40px;
	cursor:pointer;
		}
#botonIniciar:hover, #botonDetener:hover{
	box-shadow:inset 0.0em 0.0em 1em rgba(0,0,0,0.5);
	}
  .contenedor{ width: 660px;}
        #camara{
            width: 660px;
           height: 400px;
		   background-color:rgba(0,0,0,1);
        }
    </style>
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
  <li class="normal redondeararriva" style="background-color:white;cursor:default;">Clases Online</li>
  </ul>
  <br />
  <ul class="menu">

  <li class="comentarios" style="text-align:center;">
<iframe  height="400" width="660" name="peliculas" frameborder=0 marginwidth=0 marginheight=0 scrolling="no" allowfullscreen="true" src="http://www.ustream.tv/embed/19981365?v=3&amp;wmode=direct" ></iframe>
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
  
</body>
</html>
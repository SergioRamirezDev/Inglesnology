
<?php 
//Proceso de conexión con la base de datos
$conex = mysql_connect("localhost", "englishr_sergio", "englishr_sergio")
		or die("No se pudo realizar la conexion");
	mysql_select_db("englishr_GCM",$conex)
		or die("ERROR con la base de datos");

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
echo '<script language = javascript>
self.location = "../index.html"
</script>';
}

$id_usuario = $_SESSION['id_usuario'];

$consulta= "SELECT nombres,correo FROM usuarios WHERE id_usuario='".$id_usuario."'"; 
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
$nombre = $fila['nombres'];
$correo = $fila['correo'];
?>

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


</td>
</table>
</div>



     <br /><br /><br />
     
     
     
   <table class="cuerpo">
   <td valign="top" align="center" >
  <table class="tablaprincipal">
  <td>
  <ul class="menu">
  <li class="menuprincipal sesion" style="background-color:white;cursor:default;"> <img src="img/perfil.jpg" id="perfil" style="float:left;height:40px;"  />Bienvenido, <?php echo $nombre ?></li>
  </ul>
  </td>
  <tr></tr>
  <td>
  <ul class="menu">
  <li id="practicas" >Practicas</li>
  </ul>
  <ul class="menu" id="practicasmenu" >
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
  <li class="normal redondeararriva" style="background-color:white;cursor:default;">Actividades Recientes</li>
  </ul>
  <br />
  
 
  <?php

if($conex)

{

mysql_select_db("englishr_GCM", $conex);

}

$consulta="SELECT * FROM noticias";

$resultado=mysql_query($consulta, $conex);

#recupera en una fila(arreglo) los valores

while($fila= mysql_fetch_assoc($resultado))

{

echo "<table class='menu'><td class='normal redondeararriva' style='cursor:default;text-align:left;'>
  <font class='titulonoticia'>";
echo $fila['titulo'];
echo "</td><tr><td class='comentarios'><img src='";
echo $fila['imagen'];
echo "' class='imageniz' />
  <font class='pagina'>";
echo $fila['pagina'];
echo "</font> - <font class='textonoticia'>";
echo $fila['texto'];
echo "</font><br>
  <a target='_blank' href='";
echo $fila['link'];
echo "'><br><center><input type='button' class='botoncomentar'  value='Leer mas...' /></center></a>
  </td></table><br>";
}
?> 
  
 
  
  
  
  
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
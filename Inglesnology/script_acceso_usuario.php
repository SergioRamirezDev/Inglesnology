<?php 
//Proceso de conexi�n con la base de datos
$conex = mysql_connect("localhost", "englishr_sergio", "englishr_sergio")
		or die("No se pudo realizar la conexion");
	mysql_select_db("englishr_GCM",$conex)
		or die("ERROR con la base de datos");

//Inicio de variables de sesi�n
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];

//Consultar si los datos son est�n guardados en la base de datos
$consulta= "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'"; 
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("usuario o Password errados, por favor verifique.")
	self.location = "index.html"
	</script>';
}
else //opcion2: usuario logueado correctamente
{
	//Definimos las variables de sesi�n y redirigimos a la p�gina de usuario
	$_SESSION['id_usuario'] = $fila['id_usuario'];
	$_SESSION['nombres'] = $fila['nombres'];

	header("Location: comprobando.php");
}
?>

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
self.location = "index.html"
</script>';
}

$id_usuario = $_SESSION['id_usuario'];

$consulta= "SELECT correo,usuario,nombres FROM usuarios WHERE id_usuario='".$id_usuario."'"; 
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
$usuario = $fila['usuario'];
$nombre = $fila['nombres'];
$correo = $fila['correo'];
?>
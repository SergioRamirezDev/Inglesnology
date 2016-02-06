<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<script src="js/jquery-1.11.1.min.js"></script>
<?php
include('conexionprocesar.php');
try {

	if (isset($_POST['nombres']) && !empty($_POST['nombres'])  && ($_POST['correo']) && !empty($_POST['correo'])  && ($_POST['usuario']) && !empty($_POST['usuario']) && ($_POST['contrasena']) && !empty($_POST['contrasena'])) 
{
	if(isset ($_POST['check1'])){
	$conexion = mysql_connect($host,$user,$pw)or die("Problema al conectar host");
	mysql_select_db($bd,$conexion) or die("Problema con la base de datos");
	
	mysql_query("INSERT INTO usuarios (nombres,correo,usuario,contrasena) VALUES ('$_POST[nombres]','$_POST[correo]','$_POST[usuario]','$_POST[contrasena]')",$conexion);
	
	echo "<table  class='datoscorrectos azul'><td align='center'><img src='img/palomita.png' /></td><td>Registro Exitoso<br></td></table>
";
	}else{
			echo "<table  class='datoscorrectos amarillo'><td align='center'><img src='img/36247.png'/></td><td>No has aceptado los terminos y condiciones<br></td></table>";
		}
	}
	else
	
	{
		echo "<table  class='datoscorrectos amarillo'><td align='center'><img src='img/36247.png'/></td><td>Te faltan datos por llenar<br></td></table>";
	}
	
}catch (Exception $e) {
		echo "<table  class='datoscorrectos rojo'><td align='center'><img src='img/36247.png'/></td><td>Ops algo ha salido mal vuelve a registrarte<br></td></table>";
		}

	
	
	
	
	
?>
<style>
.datoscorrectos{
	position:absolute;
	z-index:999;
	background-color:rgba(0,153,255,0.6);
	width:400px;
	border-radius:2px;
	box-shadow: 0.0em 0.0em 0.8em rgba(0,0,0,0.4);
	height:50px;
	color:white;
	font-family:Tahoma, Geneva, sans-serif;
	position:absolute;
	left:20px;
	top:60px;
	}
.alertaimagen{
	padding:5px 10px 5px 10px;
	width:24px;
	height:24px;
	}
.azul{
	background-color:rgba(0,153,255,0.6);
	}
.amarillo{
		background-color:rgba(255,153,0,0.6);
	}
.rojo{
	background-color:rgba(255,0,0,0.6);
	}
</style>
<script>
$(document).ready(function() {
    $('.datoscorrectos').animate({opacity: '0'}, 8000, function() {
                    $(this).hide();
					 }
					  );
        
});
</script>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
$cn = mysql_connect("localhost","englishr_sergio","englishr_sergio")or die("Error de Conexion");
$db = mysql_select_db("englishr_GCM")or die("Error de Conexion");
return($cn);
return($db);
?>
</body>
</html>
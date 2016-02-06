<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inglesnology</title>
<link href="img/icono.png" rel="icon" />
<?php
session_start();
if (isset($_SESSION)){
echo '<script language = javascript>
self.location = "home"
</script>';
}
?>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	margin:0px;
}
-->
</style>
</head>
<body>
<table style="width:100%;height:100%;position:absolute;"><td  align="center">
<img src="img/Cargando.gif" width="200" alt="cargando" />
</td></table>
</body>
</html>

﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ficha de Registro</title>
</head>
<link href="styles.css" rel="stylesheet">

<?php
include("conexion.php");
?>
<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";
$var10="";
$var11="";
$var12="";
$var13="";
$var14="";
$var15="";
$var16="";
$var17="";
$var18="";
$var19="";
$var20="";
$var21="";
$var22="";
$var23="";
if(isset($_POST["btn1"])){
    $btn=$_POST["btn1"];
    $bus=$_POST["txtbus"];
	
    if($btn=="Buscar"){
        
        $sql="select * from practica where control='$bus'";
        $cs=mysql_query($sql,$cn);
        while($resul=mysql_fetch_array($cs)){
            $var=$resul[0];
            $var1=$resul[1];
            $var2=$resul[2];
            $var3=$resul[3];
            $var4=$resul[4];
            $var5=$resul[5];
            $var6=$resul[6];
			$var7=$resul[7];
			$var8=$resul[8];
			$var9=$resul[9];
			$var10=$resul[10];
			$var11=$resul[11];
			$var12=$resul[12];
			$var13=$resul[13];
			$var14=$resul[14];
			$var15=$resul[15];
			$var16=$resul[16];
			$var17=$resul[17];
			$var18=$resul[18];
			$var19=$resul[19];
			$var20=$resul[20];
			$var21=$resul[21];
			$var22=$resul[22];
			$var23=$resul[23];
            }}}
			
			
			
	
	?>
<body>
<center>
<table id="imprimir" class="documento"><td>

<form  method="post" name="forma" action="procesar.php" >
<table class="tabla gris">
<td align="center" class="titulo"><h2>CBTIS No. 116   FICHA DE REGISTRO   GENERACION 2012-2015</h2>
Llena y selecciona en el siguiente formato con la información requerida según corresponda.
</td>
<tr></tr>
<td>
<font class="subtitulo">Turno(M/F):</font><input name="turno" maxlength="1" type="text" class="caja" style="width:20px;" value="<?php echo $var ?>">
<font class="subtitulo">No. de Control:</font><input maxlength="20"  name="control" type="text" class="caja"  value="<?php echo $var1 ?>">
<font class="subtitulo">Grupo:</font><input maxlength="10"  name="grupo" type="text" class="caja"  value="<?php echo $var2 ?>">
<font class="subtitulo">Sexo(M/F):</font><input name="sexo" maxlength="1"  type="text" class="caja"  value="<?php echo $var3 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">Apellido paterno</font><input name="paterno" maxlength="20"  type="text" class="caja"  value="<?php echo $var4 ?>">
<font class="subtitulo">Apellido materno</font><input name="materno" maxlength="20"  type="text" class="caja"  value="<?php echo $var5 ?>">
<font class="subtitulo">Nombre(s)</font><input name="nombre" maxlength="20"  type="text" class="caja"  value="<?php echo $var6 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">Fecha de nacimiento:</font><input name="nacimiento" maxlength="20"  type="text" class="caja"  value="<?php echo $var7 ?>">
<font class="subtitulo">Lugar y estado de nacimiento:</font><input name="lugar" maxlength="20"  type="text" class="caja"  value="<?php echo $var8 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">CURP</font><input name="curp" type="text" class="caja" maxlength="20"  style="width:400px;"  value="<?php echo $var9 ?>">
<font class="subtitulo">Especialidad</font><input name="especialidad" style="width:400px;" type="text" class="caja" maxlength="20"   value="<?php echo $var10 ?>">
</td>
<tr></tr>
<td>
<font class="subtitulo">Domicilio particular: </font><input style="width:600px;" name="domicilio" maxlength="50"  type="text" class="caja"  value="<?php echo $var11 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">Teléfono casa:</font><input name="telefono" style="width:100px;" type="text"  maxlength="20"  class="caja"  value="<?php echo $var12 ?>">
<font class="subtitulo">Celular:</font><input name="celular" style="width:100px;" type="text" maxlength="20"  class="caja"  value="<?php echo $var13 ?>">
Correo Electronico:</font><input name="correo" style="width:100px;" maxlength="50"  type="text" class="caja"  value="<?php echo $var14 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">¿Piensas solicitar ingreso a la universidad?(Si/No)</font><input maxlength="2"  name="ingresouniversidad" type="text" class="caja"  value="<?php echo $var15 ?>">
Si es "SI", nombre de la escuela:</font><input name="escuela" maxlength="50"  type="text" class="caja" style="width:50px;"  value="<?php echo $var16 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">Nombre de la carrera:</font><input name="carrera" maxlength="50"  type="text" class="caja"  value="<?php echo $var17 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">Trabajas?(Si/No)</font><input name="trabajas" maxlength="2"  type="text" class="caja"  value="<?php echo $var18 ?>">
<font class="subtitulo">Nombre de la empresa:</font><input name="nombreempresa" maxlength="30"  type="text" class="caja"  value="<?php echo $var19 ?>">
<font class="subtitulo">Puesto:</font><input name="puesto" type="text" class="caja"  maxlength="50"  value="<?php echo $var20 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">Teléfono de la empresa:</font><input name="telefonoempresa" maxlength="20"  type="text" class="caja"  value="<?php echo $var21 ?>">
<font class="subtitulo">Tiempo en encontrar trabajo:</font><input name="tiempotrabajo" maxlength="30"  type="text" class="caja"  value="<?php echo $var22 ?>">
</td><tr></tr>
<td>
<font class="subtitulo">¿A qué actividad piensas dedicarte después de concluir tus estudios de bachillerato?</font>
<input name="dedicardespues" type="text" maxlength="100"  class="caja"  value="<?php echo $var23 ?>">
</td>
</table>

</td></table>



<table class="tabla" id="noimprimir"><td height="50">
<div id="cuadro"><input type="submit" name="guardar" class="guardar" /></div>
</form>

<form name="fe" action="" method="post">
<div id="cuadro"  style="top:160px;height:100%;"  class="busca" >
<img src="browser.png" class="clickbuscar" width="30" >
<input type="text"  name="txtbus" class="caja" style="height:30px;border-radius:4px;margin-left:20px;border-width:1px;border-style:solid;outline:none;width:130px;background-color:white;" placeholder="Numero de control" />
<input type="submit"  class="buscador"   id="input" name="btn1"    value="Buscar"  />
<br>
<ul>
<li><h3>Integrantes</h3></li>
<li>Cervantes Ortiz Mayte Karina</li>
<li>Cibrian Villaseñor Mayra Alejandra</li>
<li>Correia Lucero Jose Manuel</li>
<li>Damian Martha Saira Yareli</li>
<li>De La Lanza Felix Monica Nicolle</li>
</ul>
</div>
<div id="cuadro" style="top:0px;"><img src="imprimir.png" class="icon imprimir" onClick="window.print()" alt="save" ></a></div>
</form>
</td></table>

</center>
<style type="text/css" media="print">
@media print {
#noimprimir {display:none;}
}
</style>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ej62_ArreglosLibres</title>
</head>
<body>
	<h2>Registro de calificaciones</h2>
<?php
$alumnos_vector=array("Ana López","Carlos Ruiz","Elena Gómez","Luis Torres");
for ($i=0;$i<count($alumnos_vector); $i++){
	echo "Alumno: <strong>".$alumnos_nombres[$i]."</strong><br>";
	echo"<input type='hidden' name='alumnos_vector[]'
}
?>
<table border=1>
	<tr>
		<th>Alumnos>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de nombres edad y pasatiempo de alumnos</title>
</head>
<body>
	<h2>Registro de Información</h2>
	<form method="POST">
		Nombre del alumno:
		<input type="text" name="nombre">
		<br><br>
		Edad del alumno:
		<input type="text" name="edad">
		<br><br>
		Pasatiempo del alumno:
		<input type="text" name="pasatiempo">
	    <br><br>
		<button type="submit" name="guardar">Guardar</button>
	</form>
<?php

$archivoAl="alumnos.txt";
$archivoEd="edades.txt";
$archivoPas="pasatiempo.txt";
echo"<br>";
echo "DATOS GUARDADOS";
$nombre=trim($_POST['nombre']);
file_put_contents($archivoAl,$nombre.PHP_EOL,FILE_APPEND);
echo"<br>";
$edad=trim($_POST['edad']);
file_put_contents($archivoEd,$edad.PHP_EOL,FILE_APPEND);
echo"<br>";
$pasatiempo=trim($_POST['pasatiempo']);
file_put_contents($archivoPas,$pasatiempo.PHP_EOL,FILE_APPEND);

$alumnos=file($archivoAl,FILE_IGNORE_NEW_LINES);
$edad=file($archivoEd,FILE_IGNORE_NEW_LINES);
$pasatiempo=file($archivoPas,FILE_IGNORE_NEW_LINES);

for($i=0; $i<count($alumnos);$i++){
	echo "Nombre del alumnx: ". $alumnos[$i]."<br>";
	echo"<br>";
	echo "Edad del alumnx: ". $edad[$i]."<br>";
	echo"<br>";
	echo "Pasatiempo del alumnx: ". $pasatiempo[$i]."<br><br>";
	echo"<br>";
}
?>

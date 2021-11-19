<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="post">
		<h1>Alta de empleados</h1>
		<input type="text" name="nombre" placeholder="Nombre ">
		<input type="text" name="apellidos" placeholder="Apellidos">
		<input type="text"  name="ventas" placeholder=" numero de ventas realizadas el dia de hoy">
		<input type="text"  name="inventario" placeholder="inventario restante">
		<input type="text" name="horas" placeholder=" numero de horas trabajadas el dia de hoy">
		<input type="submit"  name="empleado" >
	</form>
	<?php
	include("empleado.php");
	?>
</body>
</html>
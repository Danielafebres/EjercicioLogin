<?php
session_start();

// Verifica si el usuario ha iniciado sesión y si tiene acceso a la página
if (!isset($_SESSION['usuario']) || $_SESSION['acceso'] < 3) {
header('Location: login.php');
   //exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Administrador de tienda de zapatos</title>
</head>
<body>
	<header>
		<h1>Bienvenido al panel de administración</h1>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Inventario</a></li>
				<li><a href="#">Ventas</a></li>
				<li><a href="#">Reportes</a></li>
				<li><a href="logout.php">cerrar</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Inventario</h2>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Precio</th>
					<th>Disponible</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Zapatos deportivos Nike</td>
					<td>Zapatos deportivos de hombre</td>
					<td>$100.00</td>
					<td>50 pares</td>
				</tr>
				<tr>
					<td>Zapatos de vestir Hugo Boss</td>
					<td>Zapatos de vestir de hombre</td>
					<td>$150.00</td>
					<td>25 pares</td>
				</tr>
				<tr>
					<td>Zapatos de tacón Steve Madden</td>
					<td>Zapatos de tacón de mujer</td>
					<td>$80.00</td>
					<td>75 pares</td>
				</tr>
			</tbody>
		</table>
	</main>
	<footer>
		<p>Derechos reservados © 2023</p>
	</footer>
</body>
</html>
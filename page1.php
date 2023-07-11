<?php
session_start();

// Verifica si el usuario ha iniciado sesión y si tiene acceso a la página
if (!isset($_SESSION['usuario']) || $_SESSION['acceso'] < 1) {
    header('Location: login.php');
    exit();
  
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tienda de Zapatos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Tienda de Zapatos</h1>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Hombres</a></li>
				<li><a href="#">Mujeres</a></li>
				<li><a href="#">Niños</a></li>
				<li><a href="page2.php">Ofertas</a></li>
				<li><a href="logout.php">cerrar</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="product">
			<img src="200x200.png" alt="Zapato de hombre">
			<h2>Zapato de hombre</h2>
			<p class="price">$50.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>

		<section class="product">
			<img src="200x200.png" alt="Zapato de mujer">
			<h2>Zapato de mujer</h2>
			<p class="price">$60.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>

		<section class="product">
			<img src="200x200.png" alt="Zapato de niño">
			<h2>Zapato de niño</h2>
			<p class="price">$40.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>

		<section class="product">
			<img src="200x200.png" alt="Zapato de mujer">
			<h2>Zapato de mujer</h2>
			<p class="price">$70.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>

		<section class="product">
			<img src="200x200.png" alt="Zapato de hombre">
			<h2>Zapato de hombre</h2>
			<p class="price">$55.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>

		<section class="product">
			<img src="200x200.png" alt="Zapato de niña">
			<h2>Zapato de niña</h2>
			<p class="price">$35.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>
	</main>

	<footer>
		<p>Tienda de Zapatos &copy; 2023</p>
	</footer>
</body>
</html>
     

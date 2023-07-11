<!DOCTYPE html>
<html>
<head>
	<title>Tienda de Zapatos - Ofertas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Tienda de Zapatos</h1>
		<nav>
			<ul>
				<li><a href="page1.php">Inicio</a></li>
				<li><a href="#">Hombres</a></li>
				<li><a href="#">Mujeres</a></li>
				<li><a href="#">Niños</a></li>
				<li class="active"><a href="#">Ofertas</a></li>
				<li><a href="logout.php">Cerrar</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="product">
			<img src="200x200.png" alt="Zapato de mujer">
			<h2>Zapato de mujer en oferta</h2>
			<p class="price old">$80.00</p>
			<p class="price new">$60.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>

		<section class="product">
			<img src="200x200.png" alt="Zapato de hombre">
			<h2>Zapato de hombre en oferta</h2>
			<p class="price old">$70.00</p>
			<p class="price new">$50.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>

		<section class="product">
			<img src="200x200.png" alt="Zapato de niña">
			<h2>Zapato de niña en oferta</h2>
			<p class="price old">$50.00</p>
			<p class="price new">$30.00</p>
			<a href="#" class="btn">Agregar al carrito</a>
		</section>
	</main>

	<footer>
		<p>Tienda de Zapatos &copy; 2023</p>
	</footer>
</body>
</html>
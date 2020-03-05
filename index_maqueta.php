<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tienda de camisetas</title>
<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div id="container">
	<!--cabecera-->
	<header id="header">
	 <div id="logo">
	 	<img src="assets/img/camiseta.png" alt="camiseta logo"/>
	 	<a href="index.php">
	 		Tienda de camisetas
	 	</a>
	 	<div id="log">
    <a href="./carritodecompras.php" title="Ir al carrito">
     <img src="assets/img/carrito.png" alt="carrito"/>
     </a>
     </div>
	 </div>
		
	</header>
	<!--menu-->
	<nav id="menu">
	 <ul>
	 	<li>
	 	<a href="#">Inicio</a>
	 	</li>
	 	
	 	<li>
	 	<a href="#">Manga corta</a>
	 	</li>
	 	
	 	<li>
	 	<a href="#">Sudaderas</a>
	 	</li>
	 	
	 	<li>
	 	<a href="#">Manga larga</a>
	 	</li>
	 	
	 	<li>
	 	<a href="#">Gorras</a>
	 	</li>
	 	
	 	<li>
	 	<a href="#">Tirantes</a>
	 	</li>
	 	
	 	<li>
	 	<a href="#">Chaquetas</a>
	 	</li>
	 	
	 	<li>
	 	<a href="#">Deportes</a>
	 	</li>
	 	

	 </ul>
		
	</nav>
	
	<div id="content">
	<aside id="lateral">
	<!--barra lateral-->
	 <div id="login" class="block_aside">
	 <h3>Entrar a la web</h3>
	 <form action="#" method="post">
	 	<label for="email">Email</label>
	 	<input type="email" name="email">
	 	<label for="password">Contraseña</label>
	 	<input type="password" name="password">
	 	<input type="submit" value="enviar">
	 	
	 </form>
	 <ul>
	 <li>
	 <a href="#">Mis pedidos</a>
	 </li>
	 <li>
	 <a href="#">Gestionar pedidos</a>
	 </li>
	 <li>
	 <a href="#">gestionar categorias</a>
	 </li> 
	 </ul>	
	 </div>
	
		</aside>
		
		<!--contenido central-->

		<div id="central">
		<h1>Productos destacados</h1>
		
		<?php
		   require_once'conf/conexion.php';
		
		$re=mysqli_query($con,'select * from productos') or die(mysqli_error());
		while ($f=mysqli_fetch_array($re)){
			?>
	<div class="product">
	<a href="./detalles.php">
		<img src="assets/img/<?php echo $f['imagen']?>"/>
		</a>
		<h2><?php echo $f['nombre']?></h2>
		<p><?php echo $f['precio']?></p>
		<a href="#" class="button">Comprar</a>
	</div>
	<?php
		}
		?>
	
	
	</div>

	</div>

	
	
	<footer id="footer">
		<p>Desarrollado por Cristhiam Martinez &copy; <?=date('y')?></p>
		
	</footer>
	
</div>
</body>
</html>
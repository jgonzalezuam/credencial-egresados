<?php 
session_start(); 

if (!isset ($_SESSION['email'])){ 
    header("location: ../admin.php"); 
    exit(); 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="../img/variacion1.jpg" type="image/x-icon">
	<title>Congreso - Panel</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-static-top">
			<!-- 
				navbar-default		Color claro
				navbar-inverse		Color Oscuro

				navbar-static-top	Menu estatico, sin bordes
				navbar-fixed-top	Menu fijo arriba
				navbar-fixed-bottom	Menu fijo abajo

				nota: si utilizamos fixed tenemos que agregar un padding-top al body de 70px
			 -->
			<div class="container">

				<!-- Encabezado de nuestro Menu -->
				<div class="navbar-header">
					<a  class="navbar-brand">Congreso de Investigación sobre el Tercer Sector</a>

					<!-- Boton hamburguesa, solo visible en dispositivos moviles -->
					<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#btn-colapsar">
						<span class="sr-only">Navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>-->
                    
				</div>

				<!-- Elementos del Menu -->
				<!-- Links y formulario -->
				<div class="collapse navbar-collapse" id="btn-colapsar">

					<!-- Links del Menu -->
					<ul class="nav navbar-nav">
                        <li><a href="">Descargar programa</a></li>
						<li><a href="../salir.php">Salir</a></li>
						<!--<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Computadoras</a></li>
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Smartphones</a></li>
								<li><a href="#">Drones</a></li>
								<li><a href="#">Accesorios</a></li>
							</ul>
						</li>
						<li><a href="#">Contacto</a></li>-->
					</ul>-

					<!-- Formulario de Busqueda -->
					<!--<form class="navbar-form navbar-right" action="" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Buscar">
							<button type="submit" class="btn btn-default">Buscar</button>
						</div>
					</form>-->
				</div>
			</div>				
		</nav>
	</header>

	<section class="main">
		<div class="container">
			<!-- Slider / Carousel -->
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="carousel slide" data-ride="carousel">
						<!-- Indicadores de posicion -->
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class="active"></li>
							<li data-target="#slider" data-slide-to="1"></li>
							<li data-target="#slider" data-slide-to="2"></li>
						</ol>
						
						<!-- Contenedor de Sliders -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/s1.jpg" alt="">
							</div>
			
							<div class="item">
								<img src="img/s2.jpg" alt="">
							</div>
			
							<div class="item">
								<img src="img/s3.jpg" alt="">
							</div>
						</div>
			
						<!-- Controles -->
						<a href="#slider" class="left carousel-control" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Anterior</span>
						</a>
						<a href="#slider" class="right carousel-control" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h1 class="text-center">Panel de Ponencias</h1>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
							<h3>Ponencia 1</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank">Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
                            <h3>Ponencia 2</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank">Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
                            <h3>Ponencia 3</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank">Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
                            <h3>Ponencia 4</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank">Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
                            <h3>Ponencia 5</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank">Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
                             <h3>Ponencia 6</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank">Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
                            <h3>Ponencia 7</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank">Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="../img/zom.png" alt="">
						</a>
						<div class="caption">
						    <h3>Ponencia 8</h3>
							<p>Detalles de la Ponencia.</p>
							<p>
								<a href="#" class="btn btn-default" target="_blank" >Entrar</a>
								<!--<a href="#" class="btn btn-default">Detalles</a>-->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container bg-dark">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<p class="pull-left">
						<center>Universidad Autónoma Metropolitana - Cemefi  </center>
						<!--<a href="#">Acerca de</a>
						<a href="#">Contacto</a>
					</p>
					<p class="pull-right"><a href="#">Subir en Pagina</a></p>-->
					<br>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<?php
	include("config/config.php");
	include("config/array.php");
    include("config/funciones.php");
?>

<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Cocinate">
	<meta name="keywords" content="comida, torta, recetas">
	<title>Cocinate</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<header>
		<?php include("comun/header.php"); ?>
	</header>
    
     <br>
      <?php 
     obtenerFechaYHora();
    ?>
    
	<main>
		<?php
			$seccion =  isset( $_GET['s'] ) ? $_GET['s'] : 'home';
			switch( $seccion ){
				case 'home': include( 'secciones/home.php' ); break;
				case 'galeria': include( 'secciones/galeria.php' ); break;
				case 'contacto': include( 'secciones/contacto.php' ); break;
				
				case 'panel': include( 'panel/index.php' ); break;
				case 'crearReceta': include( 'panel/crearReceta.php' ); break;
				case 'editarReceta': include( 'panel/editarReceta.php' ); break;
				
				default: include( 'secciones/home.php' );
			}
		?>	
	</main>
	
	<footer class="text-center">
		<?php include("comun/footer.php") ?>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php

require_once("../config/funciones.php");

$errores = [];

if (!empty($_POST["nombre"])){
	$nombre = $_POST["nombre"];
}else{
	$errores[] = "errorNombre";
	$nombre ="";
}

if (!empty($_POST["ingredientes"])){
	$ingredientes = $_POST["ingredientes"];
}else{
	$errores[] = "errorIngredientes";
	$nombre ="";
}

if (!empty($_POST["pasos"])){
	$pasos = $_POST["pasos"];
}else{
	$errores[] = "errorPasos";
	$nombre ="";
}

print_r($errores);


$imagen = $_FILES["imagen"];
$sabor = $_POST["sabor"];


if($imagen['name'] !=""){
		$datos = pathinfo( $imagen['name'] );
		$extension = $datos['extension'];

		switch( $extension ){
			case 'jpg':
			case 'jpeg': 
			$original = imagecreatefromjpeg($imagen['tmp_name']);
			break;
			case 'png':
			$original = imagecreatefrompng($imagen['tmp_name']);
			break;
			case 'gif':
			$original = imagecreatefromgif($imagen['tmp_name']);
			break;
		}

		$ancho_o = imagesx($original);
		$alto_o = imagesy($original);

		$ancho_c = 300;
		$alto_c = round($ancho_c  * $alto_o / $ancho_o);

		 
		$copia = imagecreatetruecolor( $ancho_c,$alto_c );

		imagecopyresampled( $copia,	$original,0,0,0,0,$ancho_c, $alto_c,$ancho_o, $alto_o);
		
		imagejpeg($copia, "../img/".time().".jpg", 100);
		
		$imagen = "img/".time().".jpg";

		imagedestroy($original);
		imagedestroy($copia);
}else{
	$imagen = "";
}


if ($nombre != "" && $pasos !="" && $ingredientes != ""){

	if(file_exists("../database/recetas.json")){
			$recetasJson = file_get_contents("../database/recetas.json");
			$recetas = json_decode($recetasJson,true);
		}else{
			$recetas = [];
		}
		
	$id = ultimoId($recetas) + 1;

	$recetas[] = ["id" => $id, "nombre" => $nombre, "sabor" => $sabor, "imagen" => $imagen, "ingredientes" => $ingredientes, "pasos" => $pasos];

	$arrayJson = json_encode($recetas);

	file_put_contents("../database/recetas.json",$arrayJson);
	$rta = "ok";
	
}else{
	$rta = "error";
	header("Location:../index.php?s=crearReceta&rta=$rta");
	die();
}

header("Location:../index.php?s=panel");
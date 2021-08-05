<?php

$id = $_POST["id"];

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

$imagen = $_FILES["imagen"];
$sabor = $_POST["sabor"];


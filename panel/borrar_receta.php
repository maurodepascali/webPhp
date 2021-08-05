<?php

$id = $_POST["id"];


$recetasJson = file_get_contents("../database/recetas.json");
$recetas = json_decode($recetasJson,true);

foreach($recetas as $key => $item) { 
   if($id  != $item["id"]){ 
     $nuevasRecetas[] = $item ;
   }
}

$arrayJson = json_encode($nuevasRecetas);
file_put_contents("../database/recetas.json",$arrayJson);


header("Location:../index.php?s=panel&rta=borradoOk");
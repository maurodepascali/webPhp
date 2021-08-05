<?php
    if(file_exists("database/recetas.json")){
        $recetasJson = file_get_contents("database/recetas.json");
		$recetas = json_decode($recetasJson,true);
    }else{
		$recetas = [];
	}
	
	
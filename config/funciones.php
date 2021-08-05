<?php
function ultimoId($array){
    usort($array, function ($a, $b) {
        return $b['id'] - $a['id'];
    });

    $primerRegistro = $array[0];

    $ultimoId = $primerRegistro["id"];

    return $ultimoId;
}

date_default_timezone_set( "America/Argentina/Buenos_Aires" );

function obtenerFechaYHora(){
    
$time = time();
echo date("d-m-Y (H:i:s)", "$time");

}

?>
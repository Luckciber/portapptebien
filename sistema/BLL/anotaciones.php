<?php


function ListarAnotaciones(){

    require_once __DIR__.'\..\SERVICIOS/anotacionesService.php';
    require_once __DIR__.'\..\conexion.php';

    $anotaciones = new AnotacionesService($pdo);

     return json_encode( $anotaciones->listarAnotacionesPorCurso());

}

$Respuesta=ListarAnotaciones();
 print_r($Respuesta)

?>

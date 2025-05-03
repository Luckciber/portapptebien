<?php
function agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva) {
    require_once __DIR__ . '/../SERVICIOS/anotacionesService.php';
    session_start();
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva);
}
function listarAnotaciones() {
    require_once __DIR__ . '/../SERVICIOS/anotacionesService.php';
    session_start();
    $anotacionesService = new AnotacionesService($pdo);
    $allAnotaciones = $anotacionesService->listarAnotaciones();
    
    if ($allAnotaciones) {
        return json_encode($allAnotaciones);
    } else {
        return json_encode(array("error" => "No se encontraron resultados."));
    }
}

function ListarAnotacionesPorCurso(){
    require_once __DIR__.'\..\SERVICIOS/anotacionesService.php';
    require_once __DIR__.'\..\conexion.php';
    $anotaciones = new AnotacionesService($pdo);
    return json_encode( $anotaciones->listarAnotacionesPorCurso());
}
function eliminarAnotacion($id_anotacion) {
    require_once __DIR__ . '/../SERVICIOS/anotacionesService.php';
    session_start();
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->eliminarAnotacion($id_anotacion);
}
function obtenerAnotacion($id_anotacion) {
    require_once __DIR__ . '/../SERVICIOS/anotacionesService.php';
    session_start();
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->obtenerAnotacion($id_anotacion);
}
function actualizarAnotacion($id_anotacion, $anotacion, $es_positiva) {
    require_once __DIR__ . '/../SERVICIOS/anotacionesService.php';
    session_start();
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->actualizarAnotacion($id_anotacion, $anotacion, $es_positiva);
}
?>

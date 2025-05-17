<?php
require_once __DIR__.'\..\SERVICIOS\anotacionesService.php';
require_once __DIR__.'\..\conexion.php';

function agregarNuevaAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva) {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva);
}

function obtenerAnotacionesPorCurso($id_curso) {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    $anotaciones = $anotacionesService->listarAnotacionesPorCurso($id_curso);
    if ($anotaciones) {
        return json_encode($anotaciones);
    } else {
        return json_encode(array("error" => "No se encontraron anotaciones para el curso con ID: " . $id_curso));
    }
}

function obtenerTodasLasAnotaciones() {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    $anotaciones = $anotacionesService->listarAnotaciones();
    if ($anotaciones) {
        return json_encode($anotaciones);
    } else {
        return json_encode(array("error" => "No se encontraron anotaciones."));
    }
}

function eliminarAnotacionPorId($id_anotacion) {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->eliminarAnotacion($id_anotacion);
}

function obtenerAnotacionPorId($id_anotacion) {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->obtenerAnotacion($id_anotacion);
}

function actualizarDatosAnotacion($id_anotacion, $anotacion, $es_positiva) {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    return $anotacionesService->actualizarAnotacion($id_anotacion, $anotacion, $es_positiva);
}


function indicadorAnotaciones() {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    $anotaciones = $anotacionesService->indicadorAnotaciones();
    if ($anotaciones) {
        return json_encode($anotaciones);
    } else {
        return json_encode(array("error" => "No se encontraron anotaciones"));
    }
}
?>
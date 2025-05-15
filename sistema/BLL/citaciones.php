<?php
require_once __DIR__.'\..\SERVICIOS\citacionesService.php';
require_once __DIR__.'\..\conexion.php';

function agregarNuevaCitacion($rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    return $citacionesService->agregarCitacion($rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion);
}

function obtenerTodasLasCitaciones() {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    $citaciones = $citacionesService->listarCitaciones();
    if ($citaciones) {
        return json_encode($citaciones);
    } else {
        return json_encode(array("error" => "No se encontraron citaciones."));
    }
}

function eliminarCitacionPorId($id_citacion) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    return $citacionesService->eliminarCitacion($id_citacion);
}

function obtenerCitacionPorId($id_citacion) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    return $citacionesService->obtenerCitacion($id_citacion);
}

function obtenerCitacionesPorAlumno($rut_alumno) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    $citaciones = $citacionesService->listarCitacionesPorAlumno($rut_alumno);
    if ($citaciones) {
        return json_encode($citaciones);
    } else {
        return json_encode(array("error" => "No se encontraron citaciones para el alumno con RUT: " . $rut_alumno));
    }
}

function actualizarDatosCitacion($id_citacion, $rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    return $citacionesService->actualizarCitacion($id_citacion, $rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion);
}

?>
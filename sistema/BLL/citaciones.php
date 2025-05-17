<?php

require_once __DIR__ . '/../conexion.php';    

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["guardar"])) {
        echo $_POST["nombreapoderado"];
        crearCitacion();
    }
}

function agregarCitacion($rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion) {
    require_once __DIR__ . '/../DAO/citacionesDAO.php';
    session_start();
    $citacionesDao = new CitacionesDao($pdo);
    return $citacionesDao->agregarCitacion($rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion);
}
function listarCitaciones() {
    require_once __DIR__ . '/../DAO/citacionesDAO.php';
    session_start();
    $citacionesDao = new CitacionesDao($pdo);
    $allCitaciones = $citacionesDao->listarCitaciones();

    if ($allCitaciones) {
        return json_encode($allCitaciones);
    } else {
        return json_encode(array("error" => "No se encontraron resultados."));
    }
}
function eliminarCitacion($id_citacion) {
    require_once __DIR__ . '/../DAO/citacionesDAO.php';
    session_start();
    $citacionesDao = new CitacionesDao($pdo);
    return $citacionesDao->eliminarCitacion($id_citacion);
}
function obtenerCitacion($id_citacion) {
    require_once __DIR__ . '/../DAO/citacionesDAO.php';
    session_start();
    $citacionesDao = new CitacionesDao($pdo);
    return $citacionesDao->obtenerCitacion($id_citacion);
}
function listarCitacionesPorAlumno($rut_alumno) {
    require_once __DIR__ . '/../DAO/citacionesDAO.php';
    session_start();
    $citacionesDao = new CitacionesDao($pdo);
    $allCitaciones = $citacionesDao->listarCitacionesPorAlumno($rut_alumno);

    if ($allCitaciones) {
        return json_encode($allCitaciones);
    } else {
        return json_encode(array("error" => "No se encontraron resultados."));
    }
}
function actualizarCitacion($id_citacion, $rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion) {
    require_once __DIR__ . '/../DAO/citacionesDAO.php';
    session_start();
    $citacionesDao = new CitacionesDao($pdo);
    return $citacionesDao->actualizarCitacion($id_citacion, $rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion);
}

function crearCitacion() {
    echo "Llegue";
}

?>
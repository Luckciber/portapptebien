<?php
require_once __DIR__.'\..\SERVICIOS\anotacionesService.php';
require_once __DIR__.'\..\conexion.php';

session_start();
$id_del_usuario_logueado = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['guardar_anotacion'])) {
        $alumno = $_POST['alumno'];
        $fecha = $_POST['fecha'];
        $es_positiva = $_POST['es_positiva'];
        $es_positiva_int = (int)$es_positiva;
        $anotacion = $_POST['anotacion'];
        $id_del_usuario_logueado = $_SESSION['usuario_id'];
        agregarAnotacion($alumno, $fecha, $anotacion, $es_positiva_int, $id_del_usuario_logueado);
    }
}

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
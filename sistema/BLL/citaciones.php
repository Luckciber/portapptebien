<?php
require_once __DIR__.'\..\SERVICIOS\citacionesService.php';
require_once __DIR__.'\..\conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['guardar_citacion'])) {
        $rutalumno = $_POST['rutalumno'];
        $rutapoderado = $_POST['rutapoderado'];
        $fechacitacion = $_POST['fechacitacion'];
        $fechacreacion = $_POST['fechacreacion'];
        $motivo = $_POST['motivo'];
        agregarCitacion($rutalumno, $rutapoderado, $fechacitacion, $fechacreacion, $motivo);
    }
}


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

function agregarCitacion($rutalumno, $rutapoderado, $fechacitacion, $fechacreacion, $motivo) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    $id_usuario = 17107688;//$_SESSION['id_usuario'];

    $siguiente_cita = $citacionesService->obtenerUltimaCitacion();
    $numero = explode('CT',$siguiente_cita['id_citacion']);
    $numeroInt = (int)$numero[1] + 1;
    $largo = strlen((string)$numero);
    $nuevoNumero = str_pad($numeroInt, 4, "0", STR_PAD_LEFT);
    $siguiente_cita = "CT". $nuevoNumero;
    
    $resultado = $citacionesService->agregarCitacion($siguiente_cita, $rutalumno, $rutapoderado, $id_usuario, $fechacreacion, $motivo, $fechacitacion);
    
    if ($resultado) {
        $_SESSION['alerta_modal'] = '
                <div class="modal show" tabindex="-1" style="display:block; background:rgba(0,0,0,0.5)">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Proceso realizado con éxito</h5>
                                <a href="inventario.php" class="close">&times;</a>
                            </div>
                            <div class="modal-body">
                                <p>Citacion Generada correctamente.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success">OK</button>
                            </div>
                        </div>
                    </div>
                </div>';
            header('Location: ../../crear-citaciones.php');
    } else {
        $_SESSION['alerta_modal'] = '
                <div class="modal show" tabindex="-1" style="display:block; background:rgba(0,0,0,0.5)">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Proceso realizado con éxito</h5>
                                <a href="inventario.php" class="close">&times;</a>
                            </div>
                            <div class="modal-body">
                                <p>Ocurrio un error durante la creación de la citacion.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success">OK</button>
                            </div>
                        </div>
                    </div>
                </div>';
            header('Location: ../../crear-citaciones.php');
    }
}

function listarEstadosCitacion() {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    return $citacionesService->listarEstadosCitacion();
}




?>
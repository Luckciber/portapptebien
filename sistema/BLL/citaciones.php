<?php
require_once __DIR__.'\..\SERVICIOS\citacionesService.php';
require_once __DIR__.'\..\conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['guardar_citacion'])) {
        $rutalumno = $_POST['rutalumno'];
        $rutapoderado = $_POST['rutapoderado'];
        $fechacitacion = $_POST['fechacitacion'];
        $fechacreacion = $_POST['creationDate'];
        $motivo = $_POST['motivo'];
        $estado = $_POST['estado'];
        agregarCitacion($rutalumno, $rutapoderado, $fechacreacion, $motivo, $fechacitacion, $estado);
    }
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

function obtenerCitacionPorId($id_citacion) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    return $citacionesService->obtenerCitacion($id_citacion);
}

function obtenerTodasLasCitaciones() {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    $citaciones = $citacionesService->obtenerTodasLasCitaciones();
        
    if($citaciones) {
        return json_encode($citaciones);
    } else {
        return json_encode(array("error" => "No se encontraron resultados."));
    }
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

function agregarCitacion($rutalumno, $rutapoderado, $fecha_creacion, $motivo, $fechacitacion, $estado) {
    global $pdo;
    $citacionesService = new CitacionesService($pdo);
    $id_usuario = 17107688;//$_SESSION['id_usuario'];
    $fechacreacion = date('Y-m-d', strtotime($fecha_creacion));
    $siguiente_cita = $citacionesService->obtenerUltimaCitacion();
    $numero = explode('CT',$siguiente_cita['id_citacion']);
    $numeroInt = (int)$numero[1] + 1;
    $nuevoNumero = str_pad($numeroInt, 4, "0", STR_PAD_LEFT);
    $siguiente_cita = "CT". $nuevoNumero;
    
    $resultado = $citacionesService->agregarCitacion($siguiente_cita, $rutalumno, $rutapoderado, $id_usuario, $fechacreacion, $motivo, $fechacitacion, $estado);
    session_start();
    if ($resultado) {
        $_SESSION['alerta_modal'] = '
                <div class="modal show" tabindex="-1" style="display:block; background:rgba(0,0,0,0.5)">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Proceso realizado con éxito</h5>
                                <a href="crear-citaciones.php" class="close">&times;</a>
                            </div>
                            <div class="modal-body">
                                <p>Citacion Generada correctamente.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="crear-citaciones.php" class="btn btn-success" data-bs-dismiss="modal">OK</a>
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
                                <a href="crear-citaciones.php" class="close">&times;</a>
                            </div>
                            <div class="modal-body">
                                <p>Ocurrio un error durante la creación de la citacion.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" data-bs-dismiss="modal">OK</button>
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
    return json_encode($citacionesService->listarEstadosCitacion());
}

?>
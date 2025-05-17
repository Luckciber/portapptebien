<?php
require_once __DIR__.'\..\SERVICIOS\anotacionesService.php';
require_once __DIR__.'\..\conexion.php';

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['guardar_anotacion'])) {
        $alumno = $_POST['alumno'];
        $fecha = $_POST['fecha'];
        $es_positiva = $_POST['es_positiva'];
        if($es_positiva){
            $es_positiva = 1;
        }else{
            $es_positiva = 0;
        }
        $anotacion = $_POST['anotacion'];
        $id_del_usuario_logueado = $_SESSION['usuario_id'];
        agregarNuevaAnotacion($alumno, $id_del_usuario_logueado, $fecha, $anotacion, $es_positiva);
    }
}

function agregarNuevaAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva) {
    global $pdo;
    $anotacionesService = new AnotacionesService($pdo);
    $respuesta =  $anotacionesService->agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva);
    if($respuesta){
                $_SESSION['alerta_modal'] = '
                <div class="modal show" tabindex="-1" style="display:block; background:rgba(0,0,0,0.5)">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Proceso realizado con éxito</h5>
                                <a href="crear-anotaciones.php" class="close">&times;</a>
                            </div>
                            <div class="modal-body">
                                <p>Anotación Generada correctamente.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="crear-anotaciones.php" class="btn btn-success" data-bs-dismiss="modal">OK</a>
                            </div>
                        </div>
                    </div>
                </div>';
            header('Location: ../../crear-anotaciones.php');
    }else{
                $_SESSION['alerta_modal'] = '
                <div class="modal show" tabindex="-1" style="display:block; background:rgba(0,0,0,0.5)">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Proceso realizado con éxito</h5>
                                <a href="crear-anotaciones.php" class="close">&times;</a>
                            </div>
                            <div class="modal-body">
                                <p>Ocurrio un error al escribir en la base de datos.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="crear-anotaciones.php" class="btn btn-success" data-bs-dismiss="modal">OK</a>
                            </div>
                        </div>
                    </div>
                </div>';
            header('Location: ../../crear-anotaciones.php');
    }
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
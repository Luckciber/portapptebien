<?php
require_once __DIR__.'\..\conexion.php';
require_once __DIR__.'\..\INTERFACES/iAnotaciones.php';
require_once __DIR__.'\..\DAO/anotacionesDAO.php';

class AnotacionesService implements IAnotaciones{
    private $anotacionesDao;

    public function __construct($pdo) {
        $this->anotacionesDao = new AnotacionesDao($pdo);
    }

    public function agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva) {
        return $this->anotacionesDao->agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva);
    }

    public function listarAnotaciones() {
        return $this->anotacionesDao->listarAnotaciones();
    }

    public function eliminarAnotacion($id_anotacion) {
        return $this->anotacionesDao->eliminarAnotacion($id_anotacion);
    }

    public function obtenerAnotacion($id_anotacion) {
        return $this->anotacionesDao->obtenerAnotacion($id_anotacion);
    }

    public function actualizarAnotacion($id_anotacion, $anotacion, $es_positiva) {
        return $this->anotacionesDao->actualizarAnotacion($id_anotacion, $anotacion, $es_positiva);
    }
}



?>
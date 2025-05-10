<?php
require_once __DIR__ . '/../DAO/citacionesDAO.php';
require_once __DIR__ . '/../INTERFACES/iCitacion.php';
require_once __DIR__ . '/../conexion.php';

class CitacionesService implements ICitacion {
    private $citacionesDao;

    public function __construct($pdo) {
        $this->citacionesDao = new CitacionesDao($pdo);
    }

    public function agregarCitacion($rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion) {
        return $this->citacionesDao->agregarCitacion($rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion);
    }

    public function listarCitaciones() {
        return $this->citacionesDao->listarCitaciones();
    }

    public function eliminarCitacion($id_citacion) {
        return $this->citacionesDao->eliminarCitacion($id_citacion);
    }

    public function obtenerCitacion($id_citacion) {
        return $this->citacionesDao->obtenerCitacion($id_citacion);
    }

    public function listarCitacionesPorAlumno($rut_alumno) {
        return $this->citacionesDao->listarCitacionesPorAlumno($rut_alumno);
    }

    public function actualizarCitacion($id_citacion, $rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion) {
        return $this->citacionesDao->actualizarCitacion($id_citacion, $rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion);
    }
}
?>
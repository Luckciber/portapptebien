<?php
interface ICitacion {
    public function agregarCitacion($siguiente_cita, $rutalumno, $rutapoderado, $id_usuario, $fechacreacion, $motivo, $fechacitacion, $estado);
    public function listarCitaciones();
    public function eliminarCitacion($id_citacion);
    public function obtenerCitacion($id_citacion);
    public function listarCitacionesPorAlumno($rut_alumno);
    public function actualizarCitacion($id_citacion, $rut_alumno, $rut_apoderado, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion);
    public function obtenerUltimaCitacion();
    public function listarEstadosCitacion();
}

?>
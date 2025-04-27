<?php
interface IAnotaciones{
    public function agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva);
    public function listarAnotaciones();
    public function eliminarAnotacion($id_anotacion);
    public function obtenerAnotacion($id_anotacion);
    public function actualizarAnotacion($id_anotacion, $anotacion, $es_positiva);
}
?>
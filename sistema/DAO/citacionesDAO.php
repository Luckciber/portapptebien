<?php
class CitacionesDao {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function agregarCitacion($siguiente_cita, $rutalumno, $rutapoderado, $id_usuario, $fechacreacion, $motivo, $fechacitacion, $estado) {
        $sql = "INSERT INTO citaciones (id_citacion, rut_alumno, rut_apoderado, id_usuario, fecha_creacion, motivo, fecha_citacion, estado) VALUES (:siguiente_cita, :rut_alumno, :rut_apoderado, :id_usuario, :fecha_creacion, :motivo, :fecha_citacion,:estado)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':siguiente_cita', $siguiente_cita);
            $stmt->bindParam(':rut_alumno', $rutalumno);
            $stmt->bindParam(':rut_apoderado', $rutapoderado);
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->bindParam(':fecha_creacion', $fechacreacion);
            $stmt->bindParam(':motivo', $motivo);
            $stmt->bindParam(':fecha_citacion', $fechacitacion);
            $stmt->bindParam(':estado', $estado);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en agregarCitacion: " . $e->getMessage());
            return false;
        }
    }
    public function listarCitaciones() {
        $sql = "SELECT * FROM citaciones ORDER BY fecha_creacion DESC";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en listarCitaciones: " . $e->getMessage());
            return false;
        }
    }
    public function eliminarCitacion($id_citacion) {
        $sql = "DELETE FROM citaciones WHERE id_citacion = :id_citacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_citacion', $id_citacion);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en eliminarCitacion: " . $e->getMessage());
            return false;
        }
    }
    public function obtenerCitacion($id_citacion) {
        $sql = "SELECT * FROM citaciones WHERE id_citacion = :id_citacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_citacion', $id_citacion);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en obtenerCitacion: " . $e->getMessage());
            return false;
        }
    }
    public function listarCitacionesPorAlumno($rut_alumno) {
        $sql = "SELECT * FROM citaciones WHERE rut_alumno = :rut_alumno ORDER BY fecha_creacion DESC";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':rut_alumno', $rut_alumno);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en listarCitacionesPorAlumno: " . $e->getMessage());
            return false;
        }
    }
    public function actualizarCitacion($siguiente_cita, $rutalumno, $rutapoderado, $id_usuario, $fechacreacion, $motivo, $fechacitacion) {
        $sql = "UPDATE citaciones SET rut_alumno = :rut_alumno, rut_apoderado = :rut_apoderado id_usuario = :id_usuario, fecha_creacion = :fecha_creacion, motivo = :motivo, fecha_citacion = :fecha_citacion WHERE id_citacion = :id_citacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_citacion', $siguiente_cita);
            $stmt->bindParam(':rut_alumno', $rutalumno);
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->bindParam(':rut_apoderado', $rutapoderado);
            $stmt->bindParam(':fecha_creacion', $fechacreacion);
            $stmt->bindParam(':motivo', $motivo);
            $stmt->bindParam(':fecha_citacion', $fechacitacion);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en actualizarCitacion: " . $e->getMessage());
            return false;
        }
    }

    public function obtenerUltimaCitacion() {
        $sql = "SELECT id_citacion FROM citaciones ORDER BY id_citacion DESC LIMIT 1";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en obtener Ultima Citación: " . $e->getMessage());
            return false;
        }
    }

    public function listarEstadosCitacion(){
        $sql = "SELECT * FROM estado_citacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en listarEstadoCitacion: " . $e->getMessage());
            return false;
        }
    }
}

?>
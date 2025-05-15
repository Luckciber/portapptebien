<?php
class CitacionesDao {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function agregarCitacion($fecha_creacion,$rut_alumno, $id_usuario, $fecha_citacion,$motivo ) {
        $sql = "INSERT INTO citaciones (rut_alumno, id_usuario, fecha_creacion, motivo, fecha_citacion) VALUES (:rut_alumno, :id_usuario, :fecha_creacion, :motivo, :fecha_citacion)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':rut_alumno', $rut_alumno);
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->bindParam(':fecha_creacion', $fecha_creacion);
            $stmt->bindParam(':motivo', $motivo);
            $stmt->bindParam(':fecha_citacion', $fecha_citacion);
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
    public function actualizarCitacion($id_citacion, $rut_alumno, $id_usuario, $fecha_creacion, $motivo, $fecha_citacion) {
        $sql = "UPDATE citaciones SET rut_alumno = :rut_alumno, id_usuario = :id_usuario, fecha_creacion = :fecha_creacion, motivo = :motivo, fecha_citacion = :fecha_citacion WHERE id_citacion = :id_citacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_citacion', $id_citacion);
            $stmt->bindParam(':rut_alumno', $rut_alumno);
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->bindParam(':fecha_creacion', $fecha_creacion);
            $stmt->bindParam(':motivo', $motivo);
            $stmt->bindParam(':fecha_citacion', $fecha_citacion);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en actualizarCitacion: " . $e->getMessage());
            return false;
        }
    }
}

?>
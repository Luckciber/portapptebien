<?php
class AnotacionesDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    

    public function agregarAnotacion($id_alumno, $id_usuario, $fecha_creacion, $anotacion, $es_positiva) {
        
        $sql = "INSERT INTO anotaciones (id_alumno, id_usuario, fecha_creacion, anotacion, es_positiva) VALUES (:id_alumno, :id_usuario, :fecha_creacion, :anotacion, :es_positiva)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_alumno', $id_alumno);
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->bindParam(':fecha_creacion', $fecha_creacion);
            $stmt->bindParam(':anotacion', $anotacion);
            $stmt->bindParam(':es_positiva', $es_positiva);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en agregarAnotacion: " . $e->getMessage());
            return false;
        }
    }
    public function listarAnotaciones() {
        $sql = "SELECT * FROM anotaciones ORDER BY fecha_creacion DESC";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en listarAnotaciones: " . $e->getMessage());
            return false;
        }
    }
    public function eliminarAnotacion($id_anotacion) {
        $sql = "DELETE FROM anotaciones WHERE id_anotacion = :id_anotacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_anotacion', $id_anotacion);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en eliminarAnotacion: " . $e->getMessage());
            return false;
        }
    }
    public function obtenerAnotacion($id_anotacion) {
        $sql = "SELECT * FROM anotaciones WHERE es_positiva = :es_positiva AND id_anotacion = :id_anotacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_anotacion', $id_anotacion);
            $stmt->bindParam(':es_positiva', $es_positiva);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en obtenerAnotacion: " . $e->getMessage());
            return false;
        }
    }
    public function actualizarAnotacion($id_anotacion, $anotacion, $es_positiva) {
        $sql = "UPDATE anotaciones SET anotacion = :anotacion, es_positiva = :es_positiva WHERE id_anotacion = :id_anotacion";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_anotacion', $id_anotacion);
            $stmt->bindParam(':anotacion', $anotacion);
            $stmt->bindParam(':es_positiva', $es_positiva);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en actualizarAnotacion: " . $e->getMessage());
            return false;
        }
    }


}

?>
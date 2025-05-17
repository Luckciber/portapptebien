<?php

    class ProfesoresDAO {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function listarProfesores() {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function obtenerProfesor($rut_profesor) {
            $sql = "SELECT * FROM profesores WHERE usuario = :rut_profesor";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':rut_profesor', $rut_profesor);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

?>
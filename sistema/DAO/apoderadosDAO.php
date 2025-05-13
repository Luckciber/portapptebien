<?php
    class ApoderadosDAO{
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function listarApoderados() {
            $sql = "SELECT rut , nombre , apellido_materno , apellido_paterno FROM apoderados ORDER BY rut ASC ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
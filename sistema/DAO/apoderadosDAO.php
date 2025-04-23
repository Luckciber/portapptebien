<?php
    class ApoderadosDAO{
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function listarApoderados() {
            $sql = "SELECT * FROM apoderados";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
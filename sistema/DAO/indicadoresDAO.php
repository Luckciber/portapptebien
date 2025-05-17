<?php
class IndicadoresDAO{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function getIndicadoresCabecera(){
            $sql = "SELECT
                        (SELECT COUNT(id_citacion) FROM citaciones) as total_citaciones,
                        (SELECT COUNT(id_citacion) FROM CITACIONES WHERE estado = 4 ) AS citaciones_finalizadas,
                        (SELECT COUNT(id) FROM `anotaciones`) as anotaciones_totales
                        ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function getIndicadoresGrafico(){
            $sql = "SELECT 
                        COUNT(id) AS ANOTACIONES,
                        DATE_FORMAT(fecha_creacion, '%Y-%m') AS anio_mes
                    FROM `anotaciones` 
                    GROUP BY anio_mes
                    ORDER BY anio_mes;
                        ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}
?>

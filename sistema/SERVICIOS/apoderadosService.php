
<?php
    require_once __DIR__.'\..\conexion.php';
    require_once __DIR__.'\..\INTERFACES/iApoderados.php';
    require_once __DIR__.'\..\DAO/apoderadosDAO.php';

    class ApoderadosService implements IApoderados{
        private $apoderadosDao;

        public function __construct($pdo) {
            $this->apoderadosDao = new ApoderadosDao($pdo);
        }

        public function listarApoderados() {
            return $this->apoderadosDao->listarApoderados();
        }
    }

?>
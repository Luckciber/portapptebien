
<?php
    require_once __DIR__.'\..\conexion.php';
    require_once __DIR__.'\..\INTERFACES/iAlumnos.php';
    require_once __DIR__.'\..\DAO/alumnosDAO.php';

    class AlumnosService implements IAlumnos{
        private $alumnosDao;

        public function __construct($pdo) {
            $this->alumnosDao = new AlumnosDao($pdo);
        }

        public function listarAlumnos() {
            return $this->alumnosDao->listarAlumnos();
        }
    }

?>
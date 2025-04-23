
<?php
    require_once __DIR__.'\..\conexion.php';
    require_once __DIR__.'\..\INTERFACES/iPermisos.php';
    require_once __DIR__.'\..\DAO/permisosDAO.php';

    class PermisosService implements IPermisos{
        private $permisosDao;

        public function __construct($pdo) {
            $this->permisosDao = new PermisosDao($pdo);
        }

        public function listarPermisos() {
            return $this->permisosDao->listarPermisos();
        }

        public function obtenerPermiso($usuario) {
            return $this->permisosDao->obtenerPermiso($usuario);
        }
    }

?>
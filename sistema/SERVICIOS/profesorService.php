<?php

require_once __DIR__ . '/../DAO/profesoresDAO.php';
require_once __DIR__ . '/../INTERFACES/iProfesor.php'; 
class ProfesorService implements IProfesor {
    private $profesoresDao;

    public function __construct($pdo) {
        $this->profesoresDao = new ProfesoresDAO($pdo);
    }

    public function listarProfesores() {
        return $this->profesoresDao->listarProfesores();
    }

    public function obtenerProfesor($rut_profesor) {
        return $this->profesoresDao->obtenerProfesor($rut_profesor);
    }
}

?>
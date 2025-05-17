<?php
    require_once __DIR__ . '/../SERVICIOS/profesorService.php';
    include __DIR__ . '/../conexion.php';

    function listarProfesores() {
        global $pdo;
        $profesorService = new ProfesorService($pdo);
        $listaProfesores = $profesorService->listarProfesores();
        if ($listaProfesores) {
            return json_encode($listaProfesores);
        } else {
            return json_encode(array("error" => "No se encontraron resultados."));
        }
        
    }


?>

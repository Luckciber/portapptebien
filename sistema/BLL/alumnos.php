<?php
require_once __DIR__.'\..\SERVICIOS\alumnosService.php';
require_once __DIR__.'\..\conexion.php';
    function listarAlumnos(){
        global $pdo;
        $alumnosService = new AlumnosService($pdo);
        $anotaciones = $alumnosService->listarAlumnos();
        $alumnosService = new AlumnosService($pdo);
        $alumnos = $alumnosService->listarAlumnos();
        
        if ($alumnos) {
            return json_encode($alumnos);
        } else {
            return json_encode(array("error" => "No se encontraron resultados."));
        }
    }
?>
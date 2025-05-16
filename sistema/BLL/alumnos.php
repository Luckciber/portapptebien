<?php

    function listarAlumnos(){
        require_once __DIR__.'\..\SERVICIOS\alumnosService.php';
        include __DIR__.'\..\conexion.php';
        $alumnosService = new AlumnosService($pdo);
        $alumnos = $alumnosService->listarAlumnos();
        
        if ($alumnos) {
            return json_encode($alumnos);
        } else {
            return json_encode(array("error" => "No se encontraron resultados."));
        }
    }
?>
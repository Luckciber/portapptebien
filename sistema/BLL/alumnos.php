<?php
    function listarAlumnos(){
        require_once __DIR__.'\..\SERVICIOS\alumnosService.php';
        session_start();
        $alumnosService = new AlumnosService($pdo);
        $allAlumnos = $alumnosService->listarAlumnos();
        
        if ($allAlumnos) {
            // Aquí puedes procesar los datos del inventario y mostrarlos en la vista
            // Por ejemplo, podrías convertirlo a JSON o renderizarlo en una tabla HTML
            return json_encode($allAlumnos);
        } else {
            return json_encode(array("error" => "No se encontraron resultados."));
        }
    }
?>
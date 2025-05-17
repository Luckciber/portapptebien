<?php
    include __DIR__.'\..\conexion.php';
    function listarApoderados(){
        require_once __DIR__.'\..\SERVICIOS\apoderadosService.php';
        global $pdo;
        $apoderadosService = new ApoderadosService($pdo);
        $allApoderados = $apoderadosService->listarApoderados();
        
        if ($allApoderados) {
            // Aquí puedes procesar los datos del inventario y mostrarlos en la vista
            // Por ejemplo, podrías convertirlo a JSON o renderizarlo en una tabla HTML
            return json_encode($allApoderados);
        } else {
            return json_encode(array("error" => "No se encontraron resultados."));
        }
    }

?>
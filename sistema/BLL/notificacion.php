<?php

    require_once __DIR__ . '/../SERVICIOS/apoderadosService.php';
    include __DIR__ . '/../conexion.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['notificar'])) {
            $apoderado= obtenerApoderado($_POST['notificar']);
            $resultado = json_decode($apoderado);
            $_SESSION['correo_destino'] = $resultado->correo;
            include __DIR__ . '/../PHPMailer2/examples/envioMail.php';
        } else{
            echo "Error: No se ha enviado el formulario.";
        }

    }

    function obtenerApoderado($rut_apoderado) {
        global $pdo;
        $apoderadosService = new ApoderadosService($pdo);($pdo);
        $apoderado = $apoderadosService->obtenerApoderado($rut_apoderado);
        
        if ($apoderado) {
            return json_encode($apoderado);
        } else {
            return json_encode(array("error" => "No se encontraron resultados."));
        }
    }

?>
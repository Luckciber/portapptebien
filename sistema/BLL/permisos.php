<?php

    session_start();

    function listarPermisos(){
        require_once __DIR__.'\..\SERVICIOS\permisosService.php';
        $permisosService = new PermisosService($pdo);
        $allPermisos = $permisosService->listarPermisos();
        return json_encode($allPermisos);
    }

    function obtenerPermiso($usuario){
        require_once __DIR__.'\..\SERVICIOS\permisosService.php';
        $permisosService = new PermisosService($pdo);
        $permisos = $permisosService->obtenerPermiso($usuario);
        return json_encode($permisos);
    }
    
?>
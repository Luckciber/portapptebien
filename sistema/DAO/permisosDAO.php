<?php

    class PermisosDAO{
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function listarPermisos() {
            $sql = "SELECT usuario , permiso FROM usuario ORDER BY permiso ASC ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function obtenerPermiso($usuario) {
            $sql = "SELECT usuario,permiso, descripcion FROM usuario,permisos WHERE usuario.permiso = permisos.id AND usuario = :user";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':user', $usuario);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

?>
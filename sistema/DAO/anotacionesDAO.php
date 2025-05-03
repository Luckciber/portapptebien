<?php

class AnotacionesDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function listarAnotacionesPorCurso($id_curso){ 

        $sql = "SELECT 
            cursos.id_cursos AS Curso,
            alumnos.nombre AS Alumno,
            anotaciones.id AS Anotacion,
            anotaciones.fecha_creacion AS Fecha
        FROM 
            anotaciones
        INNER JOIN 
            cursos 
        ON 
            anotaciones.id= cursos.id_cursos
        INNER JOIN 
            alumnos 
        ON 
            anotaciones.id_alumno = alumnos.rut
        WHERE 
            cursos.id_cursos = :id_curso
        ORDER BY 
            anotaciones.fecha_creacion;";
    
            
        try {
            $sql="select * from apoderados;";
            $stml = $this->pdo->prepare($sql); // no entiendo 
           // $stml ->bindParam(':id_curso', $id_curso);
            $stml ->execute();
           return $stml->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            error_log("Error en buscarAnotaciones:" . $e->getMessage());
            return false;
    
        }
    
    }
    
    public function Listar(){
    
    }
}


?>
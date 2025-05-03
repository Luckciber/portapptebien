<?PHP
 require_once __DIR__.'\..\conexion.php';
 require_once __DIR__.'\..\DAO/anotacionesDAO.php';
 require_once __DIR__.'\..\INTERFACES/iAnotacionesService.php';
class AnotacionesService implements IAnotaciones {
    private $anotacionesDAO ; 

    public function __construct($pdo)
    {
        $this->anotacionesDAO = new AnotacionesDAO($pdo);
    }

    public function listarAnotacionesPorCurso(){
        
       return $this->anotacionesDAO->listarAnotacionesPorCurso(1);
         
    }
public function listar(){
    return $this->anotacionesDAO->listar();
}
}

?>
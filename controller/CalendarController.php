<?php
class CalendarController extends ControladorBase{

    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){

        //clase eventos
        $evento = new Events($this->adapter);

        //todos los eventos
        $eventos = $evento->getAll();

        //obj to array
        $events = json_decode(json_encode($eventos),true);
        
        //Cargamos la vista index y le pasamos valores
        $this->view("calendar",array(
            "events" => $events,
            "err" => ''
        ));
    }

    public function crearEvento() {

        if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
    
            //creamos el evento

            $evento = new Events($this->adapter);
            $evento->setTitle($_POST['title']);
            $evento->setStart($_POST['start']);
            $evento->setEnd($_POST['end']);
            $evento->setColor($_POST['color']);

            $result = $evento->save();
            
        }

        $this->redirect("calendar", "index");

    }

    public function editarEvento() {

        if (isset($_POST['delete']) && isset($_POST['id'])){
    
            $id = $_POST['id'];
            
            $sql = "DELETE FROM events WHERE id = $id";
            $query = $bdd->prepare( $sql );
            if ($query == false) {
             print_r($bdd->errorInfo());
             die ('Error prepare');
            }
            $res = $query->execute();
            if ($res == false) {
             print_r($query->errorInfo());
             die ('Error execute');
            }
            
        }elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])){
            
            $id = $_POST['id'];
            $title = $_POST['title'];
            $color = $_POST['color'];
            
            $sql = "UPDATE events SET  title = '$title', color = '$color' WHERE id = $id ";

            
            $query = $bdd->prepare( $sql );
            if ($query == false) {
             print_r($bdd->errorInfo());
             die ('Error prepare');
            }
            $sth = $query->execute();
            if ($sth == false) {
             print_r($query->errorInfo());
             die ('Error execute');
            }

        }

    }

    public function eliminarEvento() {

    }
}
?>

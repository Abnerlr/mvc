<?php
class MascotasController extends ControladorBase{

    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){

        //clase eventos
        $mascota = new Mascota($this->adapter);

        //todos los eventos
        $mascotas = $mascota->getAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("mascotas",array(
            "mascotas" => $mascotas,
        ));
    }

    public function addView(){

        $this->view('addNew',array());

        //$this->redirect("Usuarios", "index");

    }

    public function nueva(){
        
        
        if(isset($_POST['btnsave']))
        {
                $username = $_POST['user_name'];
                $userjob = $_POST['user_job'];
                
                $imgFile = $_FILES['user_image']['name'];
                $tmp_dir = $_FILES['user_image']['tmp_name'];
                $imgSize = $_FILES['user_image']['size'];
                
                
                if(empty($username)){
                    $errMSG = "Por favor ingresa el nombre de tu mascota.";
                }
                else if(empty($userjob)){
                    $errMSG = "Por favor ingresa su raza.";
                }
                else if(empty($imgFile)){
                    $errMSG = "Por favos selecciona una imagen de tu mascota.";
                }
                else
                {
                    $upload_dir = './files/'; // actualiza las imagenes
            
                    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // obtiene extncion de la imagen
                
                    // extensiones de imagen
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
                
                    // renombra imagen subida
                    $userpic = rand(1000,1000000).".".$imgExt;
                        
                    // formatos permitidos
                    if(in_array($imgExt, $valid_extensions)){           
                        // tamaño maximo '5MB'
                        if($imgSize < 5000000)              {
                            move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                        }
                        else{
                            $errMSG = "Disculpa, La imagen de tu mascota es muy grande.";
                        }
                    }
                    else{
                        $errMSG = "Disculpa, solo puedes subir imagenes en formato JPG, JPEG, PNG & GIF .";     
                    }
                }
                
                
                // si no hay error ....
                if(!isset($errMSG))
                {

                    $mascota = new Mascota($this->adapter);

                    $mascota->setName($username);
                    $mascota->setRaza( $userjob);
                    $mascota->setImagen($userpic);

                    $save = $mascota->save();

                    
                    if($save)
                    {
                        $successMSG = "Tu mascota ha sido registrada ...";
                    }
                    else
                    {
                        $errMSG = "error mientras se guardaba la informacion....";
                    }
                }
            }
            $this->redirect("mascotas", "index");
        }


    public function eliminar(){

        if(isset($_GET['delete_id']))
        {
            
            $mascota=new Mascota($this->adapter);
            $mascota->deleteById($_GET['delete_id']);
            
            
        }

        $this->redirect("calendar", "index");
    }

    public function editar(){


        if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT userName, userProfession, userPic FROM tbl_users WHERE userID =:uid');
        $stmt_edit->execute(array(':uid'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: index.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
        $username = $_POST['user_name'];// user name
        $userjob = $_POST['user_job'];// user email
            
        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = 'user_images/'; // upload directory   
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $userpic = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['userPic']);
                    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            // if no image selected the old image remain as it is.
            $userpic = $edit_row['userPic']; // old image from database
        }   
                        
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
            $stmt = $DB_con->prepare('UPDATE tbl_users 
                                         SET userName=:uname, 
                                             userProfession=:ujob, 
                                             userPic=:upic 
                                       WHERE userID=:uid');
            $stmt->bindParam(':uname',$username);
            $stmt->bindParam(':ujob',$userjob);
            $stmt->bindParam(':upic',$userpic);
            $stmt->bindParam(':uid',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='index2.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    }

}
?>

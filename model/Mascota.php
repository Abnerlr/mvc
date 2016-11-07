<?php
class Mascota extends EntidadBase{
    private $id;
    private $name;
    private $raza;
    private $imagen;
    
    public function __construct($adapter) {
        $table="mascotas";
        parent::__construct($table,$adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function save(){
        $query="INSERT INTO mascotas (id,name,raza,imagen)
                VALUES(NULL,
                       '".$this->name."',
                       '".$this->raza."',
                       '".$this->imagen."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>
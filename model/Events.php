<?php
class Events extends EntidadBase{
    private $id;
    private $title;
    private $color;
    private $start;
    private $end;
    
    public function __construct($adapter) {
        $table="events";
        parent::__construct($table,$adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getStart() {
        return $this->start;
    }

    public function setStart($start) {
        $this->start = $start;
    }

    public function getEnd() {
        return $this->end;
    }

    public function setEnd($end) {
        $this->end = $end;
    }

    public function save(){
        $query="INSERT INTO events (id,title,color,start,end)
                VALUES(NULL,
                       '".$this->title."',
                       '".$this->color."',
                       '".$this->start."',
                       '".$this->end."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>
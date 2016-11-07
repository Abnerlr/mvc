<?php
class LoginController extends ControladorBase{

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $this->view("login",array(
            
        ));
    }

}//fin clase
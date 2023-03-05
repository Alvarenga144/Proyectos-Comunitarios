<?php

class Inicio extends Controller{
    public function __construct(){

        parent:: __construct();
        session_start();
    }

    public function home(){
        $this->getView()->title = "Home | APP";
        $pagina = 'inicio/home';
        $this->getView()->loadView($pagina); 
    }
}

?>
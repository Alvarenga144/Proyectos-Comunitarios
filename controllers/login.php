<?php
class Login extends Controller{

    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){

        $pagina = 'Login/index';
        $this->getView()->loadView($pagina);


    }

    public function startLogin(){
        $user = $_POST['user'];
        $psw = $_POST['password'];
        $typeuser = $_POST['typeuser'];
        $status = false;
        $message = "USUARIO,CONTRASEÑA O NIVEL DE ACCESO INCORRECTOS";
        if ($user != "") {
            if ($psw != "") {


                $this->getModel()->setUsuario($user);
                $this->getModel()->setPassword($psw);


            if ($typeuser =="Invitado") {
                $login = $this->getModel()->getLogin();
                
            if (!empty($login)) {
                $usuario = $login['nombre_User'];
                $id = $login['id_Usuario'];
                $cargo = 'Invitado';
            }
            
            }else if ($typeuser == "Responsable") {
                $login = $this->getModel()->LoginResponsable();
                if (!empty($login)) {
                $usuario = $login['nombre_Responsable'];
                $id = $login['id_Responsable'];
                $cargo = $login['cargo'];
                }
            }


            if (!empty($login)) {
                $status = true;
                $message = "Sesion exitosa"; 
                session_start();
                $_SESSION['usuario']= $usuario;
                $_SESSION['codigo']= $id;
                $_SESSION['cargo']=$cargo;
            }
            
            }else{
                $message = "requered password";
            }
        }else{
            $message = "requered password";
        }
        $data = array('message' => $message, 'status' => $status);
        echo json_encode($data); 
    }

    public function cerrarSesion(){
        session_start();
        $_SESSION=array();
        session_destroy();
        echo json_encode(array('status' => true));
    }
}







?>
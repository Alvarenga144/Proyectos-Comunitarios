<?php
    class GestionUsuario extends Controller{
        
        public function __construct(){
            parent:: __construct();
            session_start();
        }

        public function TablaUsuario(){
            $this->getView()->title = "Usuarios | APP";
            $this->getView()->usuarios = $this->getModel()->listadoUsuario();
            $pagina = 'gestion/tablaUsuario';
            $this->getView()->loadView($pagina);
        }
        
        //metodo para agregar usuario
        public function agregar(){
            if(!empty($_POST)){
                $this->getModel()->setNombre($_POST['nombre']);
                $this->getModel()->setFecha_naci($_POST['fecha']);
                $this->getModel()->setCorreo($_POST['email']);
                $contra = sha1($_POST['password']);
                $this->getModel()->setPassword($contra);

                echo $this->getModel()->insertarUsuario();

            }else{

            }
        }
        //metodo para cargar datos a editar el usuario
        //se accede a este metodo desde ajax en el escript gestion.js
        public function modificar(){
            $id_Usuario = $_POST['dataId'];
            $this->getModel()->setId($id_Usuario);
            $usuario = $this->getModel()->getUserById();//metodo en el modelo para extraer los datos
            echo json_encode(array('datos' => $usuario, 'msg' => 'DATOS CARGADOS CON EXITO'));
        }



        //metodo para actualizar el usuario en la base de datos
        public function saveModificar(){
            if(!empty($_POST)){
                $this->getModel()->setId($_POST['id']);
                $this->getModel()->setNombre($_POST['nombre']);
                $this->getModel()->setFecha_naci($_POST['fecha']);
                $this->getModel()->setCorreo($_POST['email']);
                $this->getModel()->setPassword($_POST['password']);

                echo $this->getModel()->modificarUsuario();

            }else{
            }
        }

     //metodo para eliminar al Usuario
        public function eliminar(){
            if (!empty($_GET)) {
                $this->getModel()->setId($_GET['id_Usuario']);
            }
         //invocar funcion de eliminación de modelo   
            echo $this->getModel()->eliminarUsuario();
        }


    }
?>
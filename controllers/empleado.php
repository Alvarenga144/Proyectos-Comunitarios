<?php
    class Empleado extends Controller{
        
        public function __construct(){
            parent:: __construct();
            session_start();
        }

        public function TablaEmpleados(){
            $this->getView()->title = "Empleados | APP"; 
            $this->getView()->nombre_Responsable = $this->getModel()->listadoEmpleados();
            $pagina = 'gestion/tablaEmpleados';
            $this->getView()->loadView($pagina);
        }

    //metodo para agregar usuario
            public function agregarE(){
                if(!empty($_POST)){
                    $this->getModel()->setNombre_Responsable($_POST['nombre']);
                    $this->getModel()->setFecha_nacimiento($_POST['fecha']);
                    $this->getModel()->setCorreo_Responsable($_POST['email']);
                    $contra = sha1($_POST['password']);
                    $this->getModel()->setPassword_respon($contra);
                    $this->getModel()->setCargo($_POST['cargo']);
    
                    echo $this->getModel()->insertarEmpleado();
    
                }else{
                    
                }
            }

        //metodo para cargar datos a editar el empleado
        //se accede a este metodo des ajax en el escript empleado.js
        public function modificarE(){
            $id_Responsable = $_POST['dataId'];
            $this->getModel()->setId_Responsable($id_Responsable);
            $nombre_Responsable = $this->getModel()->getEmpleadoById();//metodo en el modelo para extraer los datos
            echo json_encode(array('datos' => $nombre_Responsable, 'msg' => 'DATOS CARGADOS CON EXITO'));
        }


          //metodo para actualizar el usuario en la base de datos
        public function saveModificar(){
            if(!empty($_POST)){
               

            if ($_POST['password'] == $contra['password_respon']) {
                $password = $_POST['password'];

            }else {
                $password = sha1($_POST['password']);
            }
                $this->getModel()->setId_Responsable($_POST['id']);
                $this->getModel()->setNombre_Responsable($_POST['nombre']);
                $this->getModel()->setFecha_nacimiento($_POST['fecha']);
                $this->getModel()->setCorreo_Responsable($_POST['email']);
                $this->getModel()->setPassword_respon($password);
                $this->getModel()->setCargo($_POST['carg']);

                echo $this->getModel()->modificarEmpleado();

            }else{
            }
        }


    //metodo para eliminar al empleado
        public function eliminarE(){
            if (!empty($_GET)) {
                $this->getModel()->setId_Responsable($_GET['id_Responsable']);
            }
         //invocar funcion de eliminación del modelo   
        echo $this->getModel()->eliminarEmpleado();
        }

    }

?>
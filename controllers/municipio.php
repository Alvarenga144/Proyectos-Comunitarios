<?php
    class Municipio extends Controller{
        
        public function __construct(){
            parent:: __construct();
            session_start();
        }

        public function TablaMunicipios(){

            $this->getView()->title = "Municipios | APP";
            $this->getView()->municipio = $this->getModel()->listadoMunicipio();
            $pagina = 'gestion/tablaMunicipio';
            $this->getView()->loadView($pagina);

        }

        public function agregarM(){
            if(!empty($_POST)){
                $this->getModel()->setNombre_Municipio($_POST['municipio']);
                $this->getModel()->setId_Departamento($_POST['sDepartamento']);
                

                echo $this->getModel()->insertarMunicipio();

            }else{
                $this->getView()->departamento = $this->getModel()->listadoDepartamentos();
                $this->getView()->title = "Nuevo Municipios  | APP";
                $pagina = "gestion/nuevoM"; 
                $this->getView()->loadView($pagina);
            }
        }

        public function modificarM(){
            if (!empty($_POST)) {
                $this->getModel()->setId_Municipio($_POST['txtCodigo']);
                $this->getModel()->setNombre_Municipio($_POST['txtNombre']);
                $this->getModel()->setId_Departamento($_POST['sDepartamento']);
                echo $this->getModel()->modificarMunicipio();
            }else{
                $id_Municipio = $_GET['id_Municipio'];
                $this->getModel()->setId_Municipio($id_Municipio);
                $this->getView()->datos2 = $this->getModel()->MunicipioFiltrado();
                $this->getView()->departamento = $this->getModel()->listadoDepartamentos();
                $this->getView()->title = "Modificar Docentes | APP";
                $pagina = 'gestion/editM';
                $this->getView()->loadView($pagina);
            }

        }

        public function eliminarM(){
            $id_Municipio = $_GET['id_Municipio'];
            $this->getModel()->setId_Municipio($id_Municipio);

            echo $this->getModel()->eliminarMunicipio();
        }

    }

?>
<?php
    class GestionAcontecimiento extends Controller{
        
        public function __construct(){
            parent::__construct();
        }

        // Visualizar la tabla con datos y llama a las funciones modelo principal
        public function acontecimientos(){
            //$accounts = $this->getModel()->listarTipoAcontecimiento();
            $this->getView()->acontecimientos = $this->getModel()->listarAcontecimientos();
            $this->getView()->title = "Acontecimientos | APP";
            $this->getView()->categorias = $this->getModel()->listarTipoAcontecimiento();
            $this->getView()->departamentos = $this->getModel()->getDepartamentos();
            $this->getView()->municipios = $this->getModel()->getMunicipios();
            $this->getView()->responsables = $this->getModel()->getResponsable();

            $pagina = 'gestion/tablaAcontecimientos';
            $this->getView()->loadView($pagina);
        }

        //Selecciona el id departamentos y lo manda al query
        public function getUbicaciones(){
            $id = $_GET['id'];
            $municipios = $this->getModel()->extraerUbicaciones($id);
            echo json_encode( $municipios );
        }

        //Agregar acontecimiento nuevo
        public function agregarAcontecimiento(){
            $this->getModel()->setId_tipoAcont($_POST['sCategoria']);
            $this->getModel()->setNombre_Acont($_POST['nombreAcont']);
            $this->getModel()->setFecha_inicio($_POST['fechaInicio']);
            $this->getModel()->setFecha_final($_POST['fechaFin']);
            $this->getModel()->setDescripcion($_POST['descrpcion']);
            $this->getModel()->setCantidad_Beneficiados($_POST['beneficiados']);
            $this->getModel()->setUbicacion($_POST['sMunicipios']);
            $this->getModel()->setEmpleado($_POST['sResponsable']);
            $this->getModel()->setEstado($_POST['sEstado']);

            echo $this->getModel()->insertAcontecimiento();
        }

        //metodo para cargar datos a editar el acontecimiento
        //se accede a este metodo desde ajax en el escript gestion.js
        public function modificarAcont(){
            if(!empty($_POST))
            {
                $this->getModel()->setId_acontecimiento($_POST['txtidAcont']);//1
                $this->getModel()->setId_tipoAcont($_POST['sCategoria']);//2
                $this->getModel()->setNombre_Acont($_POST['nombreAcont']);//3
                $this->getModel()->setFecha_inicio($_POST['fechaInicio']);//4
                $this->getModel()->setFecha_final($_POST['fechaFin']);//5
                $this->getModel()->setDescripcion($_POST['descrpcion']);//6
                $this->getModel()->setCantidad_Beneficiados($_POST['beneficiados']);//7
                $this->getModel()->setUbicacion($_POST['sMunicipios']);//8
                $this->getModel()->setEmpleado($_POST['sResponsable']);//9
                $this->getModel()->setEstado($_POST['sEstado']);
                echo $this->getModel()->updateAcontInsert();
            } else {
                $idacont = $_GET['id_Acontecimiento'];
                $this->getModel()->setId_acontecimiento($idacont);
                $this->getView()->dataAcont = $this->getModel()->getAcontById();
                $this->getView()->tipocategoria = $this->getModel()->listarTipoAcontecimiento();
                //$this->getView()->ubicacion1 = $this->getModel()->getDepartamentos();
                $this->getView()->ubicacion2 = $this->getModel()->getMunicipios();
                $this->getView()->empleado = $this->getModel()->getResponsable();

                $this->getView()->title = "Modificar Acontecimientos | APP";
                $pagina = 'gestion/editAcontecimiento';
                $this->getView()->loadView($pagina);
            }
            
        }

        // ELIMINAR UN REGISTRO
        public function deleteAcont(){
            $idacont = $_GET['id_Acontecimiento'];
            $this->getModel()->setId_acontecimiento($idacont);

            echo $this->getModel()->eliminarRegistroAcont();
        }

    }

?>
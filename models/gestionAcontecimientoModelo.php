<?php
    class GestionAcontecimientoModelo extends Model{
        private $id_acontecimiento;
        private $id_tipoAcont;
        private $nombre_Acont;
        private $fecha_inicio;
        private $fecha_final;
        private $descripcion;
        private $cantidad_Beneficiados;
        private $ubicacion;
        private $empleado;
        private $estado;

        public function __construct()
        {
            parent::__construct();
        }

        /**
         * Get the value of id_acontecimiento
         */ 
        public function getId_acontecimiento()
        {
                return $this->id_acontecimiento;
        }

        /**
         * Set the value of id_acontecimiento
         *
         * @return  self
         */ 
        public function setId_acontecimiento($id_acontecimiento)
        {
                $this->id_acontecimiento = $id_acontecimiento;

                return $this;
        }

        /**
         * Get the value of id_tipoAcont
         */ 
        public function getId_tipoAcont()
        {
                return $this->id_tipoAcont;
        }

        /**
         * Set the value of id_tipoAcont
         *
         * @return  self
         */ 
        public function setId_tipoAcont($id_tipoAcont)
        {
                $this->id_tipoAcont = $id_tipoAcont;

                return $this;
        }

        /**
         * Get the value of nombre_Acont
         */ 
        public function getNombre_Acont()
        {
                return $this->nombre_Acont;
        }

        /**
         * Set the value of nombre_Acont
         *
         * @return  self
         */ 
        public function setNombre_Acont($nombre_Acont)
        {
                $this->nombre_Acont = $nombre_Acont;

                return $this;
        }

        /**
         * Get the value of fecha_inicio
         */ 
        public function getFecha_inicio()
        {
                return $this->fecha_inicio;
        }

        /**
         * Set the value of fecha_inicio
         *
         * @return  self
         */ 
        public function setFecha_inicio($fecha_inicio)
        {
                $this->fecha_inicio = $fecha_inicio;

                return $this;
        }

        /**
         * Get the value of fecha_final
         */ 
        public function getFecha_final()
        {
                return $this->fecha_final;
        }

        /**
         * Set the value of fecha_final
         *
         * @return  self
         */ 
        public function setFecha_final($fecha_final)
        {
                $this->fecha_final = $fecha_final;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of cantidad_Beneficiados
         */ 
        public function getCantidad_Beneficiados()
        {
                return $this->cantidad_Beneficiados;
        }

        /**
         * Set the value of cantidad_Beneficiados
         *
         * @return  self
         */ 
        public function setCantidad_Beneficiados($cantidad_Beneficiados)
        {
                $this->cantidad_Beneficiados = $cantidad_Beneficiados;

                return $this;
        }

        /**
         * Get the value of ubicacion
         */ 
        public function getUbicacion()
        {
                return $this->ubicacion;
        }

        /**
         * Set the value of ubicacion
         *
         * @return  self
         */ 
        public function setUbicacion($ubicacion)
        {
                $this->ubicacion = $ubicacion;

                return $this;
        }

        /**
         * Get the value of empleado
         */ 
        public function getEmpleado()
        {
                return $this->empleado;
        }

        /**
         * Set the value of empleado
         *
         * @return  self
         */ 
        public function setEmpleado($empleado)
        {
                $this->empleado = $empleado;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        // Mostrar toda la data de acontecimientos
        public function listarAcontecimientos(){
                $sql = "SELECT ac.*, tac.acontecimiento, m.nombre_Municipio, d.nombre_Departamento, r.nombre_Responsable FROM acontecimientos AS ac
                        LEFT JOIN tipoacontecimiento AS tac ON ac.id_TipoAcont = tac.id_tipoAcont
                        LEFT JOIN municipios AS m ON m.id_Municipio = ac.ubicacion
                        LEFT JOIN departamentos AS d ON d.id_Departamento = m.id_Departamento
                        LEFT JOIN responsables AS r ON r.id_Responsable = ac.empleado
                        ORDER BY ac.id_Acontecimiento desc
                        ";
                $db = $this->getDb()->conectar();
                $stmt = $db->query($sql);
                $arreglo = [];
                while ($fila = $stmt->fetch_array()) {
                $arreglo[] = $fila;
                }
                return $arreglo;
        }


        // CONSULTAS PARA EXTRAER DATOS DE TABLAS EXTERNAS Y ASOCIARLAS A LA TABLA ACONTECIMIENTOS
        // Extrae los 3 tipos de acontecimientos de su tabla
        public function listarTipoAcontecimiento(){
            $sql = "SELECT * FROM tipoAcontecimiento";
        
            $db = $this->getDb()->conectar();
            $stmt = $db->query($sql);
            
            while($fila = $stmt->fetch_array()){
                $arreglo[] = $fila;
            }

            return $arreglo;
        }
        //Extraer toda la tabla departamentos mediante su id
        public function extraerUbicaciones($idDepartamento){
            $sql = "SELECT * from municipios WHERE id_Departamento = $idDepartamento";

            $db = $this->getDb()->conectar();
            $stmt = $db->query($sql);
            while($fila = $stmt->fetch_array()){
                $arreglo[] = $fila;
            }
            return $arreglo;
        }
        //Llama a toda la tabla departamentos
        public function getDepartamentos(){
            $sql = "SELECT * from departamentos";

            $db = $this->getDb()->conectar();
            $stmt = $db->query($sql);
            while($fila = $stmt->fetch_array()){
                $arreglo[] = $fila;
            }
            return $arreglo;
        }
        //Llama a toda la tabla municipios
        public function getMunicipios(){
            $sql = "SELECT * from municipios";

            $db = $this->getDb()->conectar();
            $stmt = $db->query($sql);
            while($fila = $stmt->fetch_array()){
                $arreglo[] = $fila;
            }
            return $arreglo;
        }
        // Consulta para traer la información de responsables
        public function getResponsable(){
            $sql = "SELECT * from responsables";

            $db = $this->getDb()->conectar();
            $stmt = $db->query($sql);
            while($fila = $stmt->fetch_array()){
                $arreglo[] = $fila;
            }
            return $arreglo;
        }

        // Insertar en base de datos
        public function insertAcontecimiento(){
            $sql="INSERT INTO acontecimientos (id_TipoAcont, nombre_Acont, fecha_Inicio, fecha_Fin, descripcion, cantidad_Beneficiados, ubicacion, empleado, estado)
            VALUES (?,?,?,?,?,?,?,?,?)";
            $db = $this->getDb()->conectar();
            $stmt = $db->prepare($sql);
            $stmt->bind_param('issssiiis', $this->id_tipoAcont, $this->nombre_Acont, $this->fecha_inicio, $this->fecha_final, $this->descripcion, $this->cantidad_Beneficiados, $this->ubicacion, $this->empleado, $this->estado);
            $stmt->execute();

            return $stmt->affected_rows;
        }

        // buscar el id de acontecmientos para modificar
        public function getAcontById()
        {
                $sql = "SELECT * FROM acontecimientos WHERE id_Acontecimiento=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('i',$this->id_acontecimiento);
                $stmt->execute();
                $result = $stmt->get_result();
                
                return $result->fetch_assoc();
        }

        // MODIFICAR
        public function updateAcontInsert(){
                $sql="UPDATE acontecimientos SET id_TipoAcont=?, nombre_Acont=?, fecha_Inicio=?, fecha_Fin=?, descripcion=?, cantidad_Beneficiados=?, ubicacion=?, empleado=?, estado=?
                WHERE id_Acontecimiento=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('issssiiisi', $this->id_tipoAcont, $this->nombre_Acont, $this->fecha_inicio, $this->fecha_final, $this->descripcion, $this->cantidad_Beneficiados, 
                $this->ubicacion, $this->empleado, $this->estado, $this->id_acontecimiento);
                $stmt->execute();
    
                return $stmt->affected_rows;
        }

        // DELETE ACONT
        public function eliminarRegistroAcont(){
                $sql = "DELETE FROM acontecimientos WHERE id_Acontecimiento=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('i', $this->id_acontecimiento);
                $stmt->execute();

                return $stmt->affected_rows;
        }


    }
?>
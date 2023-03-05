<?php

class  EmpleadoModelo extends Model
{

        private $id_Responsable;
        private $nombre_Responsable;
        private $fecha_nacimiento;
        private $correo_Responsable;
        private $password_respon;
        private $cargo;

        public function __construct()
        {
                parent::__construct();
        }


        /**
         * Get the value of id_Responsable
         */
        public function getId_Responsable()
        {
                return $this->id_Responsable;
        }

        /**
         * Set the value of id_Responsable
         *
         * @return  self
         */
        public function setId_Responsable($id_Responsable)
        {
                $this->id_Responsable = $id_Responsable;

                return $this;
        }

        /**
         * Get the value of nombre_Responsable
         */
        public function getNombre_Responsable()
        {
                return $this->nombre_Responsable;
        }

        /**
         * Set the value of nombre_Responsable
         *
         * @return  self
         */
        public function setNombre_Responsable($nombre_Responsable)
        {
                $this->nombre_Responsable = $nombre_Responsable;

                return $this;
        }

        /**
         * Get the value of fecha_nacimiento
         */
        public function getFecha_nacimiento()
        {
                return $this->fecha_nacimiento;
        }

        /**
         * Set the value of fecha_nacimiento
         *
         * @return  self
         */
        public function setFecha_nacimiento($fecha_nacimiento)
        {
                $this->fecha_nacimiento = $fecha_nacimiento;

                return $this;
        }

        /**
         * Get the value of correo_Responsable
         */
        public function getCorreo_Responsable()
        {
                return $this->correo_Responsable;
        }

        /**
         * Set the value of correo_Responsable
         *
         * @return  self
         */
        public function setCorreo_Responsable($correo_Responsable)
        {
                $this->correo_Responsable = $correo_Responsable;

                return $this;
        }

        /**
         * Get the value of password_respon
         */
        public function getPassword_respon()
        {
                return $this->password_respon;
        }

        /**
         * Set the value of password_respon
         *
         * @return  self
         */
        public function setPassword_respon($password_respon)
        {
                $this->password_respon = $password_respon;

                return $this;
        }

        /**
         * Get the value of cargo
         */
        public function getCargo()
        {
                return $this->cargo;
        }

        /**
         * Set the value of cargo
         *
         * @return  self
         */
        public function setCargo($cargo)
        {
                $this->cargo = $cargo;

                return $this;
        }

        //llamar el listado de empleados de la base de datos
        public function listadoEmpleados()
        {
                $sql = "SELECT * FROM responsables";
                $db = $this->getDb()->conectar();
                $stmt = $db->query($sql);
                $arreglo = [];
                while ($fila = $stmt->fetch_array()) {
                        $arreglo[] = $fila;
                }
                return $arreglo;
        }

        //insertar empleados en la tabla
        public function insertarEmpleado()
        {
                $sql = "INSERT INTO responsables (nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo) VALUES (?,?,?,?,?)";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('sssss', $this->nombre_Responsable, $this->fecha_nacimiento, $this->correo_Responsable, $this->password_respon, $this->cargo);
                $stmt->execute();

                return $stmt->affected_rows;
        }

        //optener el id del empleado para modificar
        public function getEmpleadoById()
        {
                $sql = "SELECT * FROM responsables WHERE id_Responsable=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('i', $this->id_Responsable);
                $stmt->execute();
                $result = $stmt->get_result();

                return $result->fetch_assoc();
        }

        //modificar empleado
        public function modificarEmpleado()
        {
                $sql = "UPDATE responsables SET nombre_Responsable=?, fecha_nacimiento=?, correo_Responsable=?, password_respon=?, cargo=? WHERE id_Responsable=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('sssssi', $this->nombre_Responsable, $this->fecha_nacimiento, $this->correo_Responsable, $this->password_respon, $this->cargo, $this->id_Responsable);
                $stmt->execute();
                return $stmt->affected_rows;
        }


        //elimira empleado       
        public function eliminarEmpleado()
        {
                $sql = "DELETE FROM responsables WHERE id_Responsable=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('i', $this->id_Responsable);
                $stmt->execute();
                return $stmt->affected_rows;
        }
}

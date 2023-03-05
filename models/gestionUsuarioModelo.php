<?php

class GestionUsuarioModelo extends Model
{
        private $id;
        private $nombre;
        private $fecha_naci;
        private $correo;
        private $password;

        public function __construct()
        {
                parent::__construct();
        }


        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of fecha_naci
         */
        public function getFecha_naci()
        {
                return $this->fecha_naci;
        }

        /**
         * Set the value of fecha_naci
         *
         * @return  self
         */
        public function setFecha_naci($fecha_naci)
        {
                $this->fecha_naci = $fecha_naci;

                return $this;
        }

        /**
         * Get the value of correo
         */
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */
        public function setCorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }

        /**
         * Get the value of password
         */
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        public function listadoUsuario()
        {
                $sql = "SELECT * FROM usuarios";
                $db = $this->getDb()->conectar();
                $stmt = $db->query($sql);
                $arreglo = [];
                while ($fila = $stmt->fetch_array()) {
                        $arreglo[] = $fila;
                }
                return $arreglo;
        }


        public function insertarUsuario()
        {
                $sql = "INSERT INTO usuarios (nombre_User, fecha_Nac, correo, password_user) VALUES (?,?,?,?)";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('ssss', $this->nombre, $this->fecha_naci, $this->correo, $this->password);
                $stmt->execute();

                return $stmt->affected_rows;
        }
        //esto esta comentado porque es para filtrar informacion para modificar y nosotros modficar lo 
        //tenemos diferente
        // public function UsuariosFiltrados(){
        //         $sql = "SELECT * FROM usuarios WHERE id_Usuario=?";
        //         $db = $this->getDb()->conectar();
        //         $stmt = $db->prepare($sql);
        //         $stmt->bind_param('i',$this->id);
        //         $stmt->execute();
        //         $result = $stmt->get_result();

        //         return $result->fetch_array();
        // }

        //esta funcion es para optener el id del usuario desde la base de datos
        public function getUserById()
        {
                $sql = "SELECT * FROM usuarios WHERE id_Usuario=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('i', $this->id);
                $stmt->execute();
                $result = $stmt->get_result();

                return $result->fetch_assoc();
        }

        public function modificarUsuario()
        {
                $sql = "UPDATE usuarios SET nombre_User=?, fecha_Nac=?, correo=?, password_user=? WHERE id_Usuario=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('ssssi', $this->nombre, $this->fecha_naci, $this->correo, $this->password, $this->id);
                $stmt->execute();
                return $stmt->affected_rows;
        }

        public function eliminarUsuario()
        {
                $sql = "DELETE FROM usuarios WHERE id_Usuario=?";
                $db = $this->getDb()->conectar();
                $stmt = $db->prepare($sql);
                $stmt->bind_param('i', $this->id);
                $stmt->execute();
                return $stmt->affected_rows;
        }
}

<?php

class LoginModelo extends Model{
    private $usuario;
    private $password;


    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

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

    public function getLogin(){
        $sql = "SELECT id_Usuario, nombre_User  FROM usuarios WHERE nombre_User=? AND password_user=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ss', $this->usuario,$this->password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
}

public function LoginResponsable(){
    $sql = "SELECT id_Responsable, nombre_Responsable, cargo FROM responsables WHERE correo_Responsable=? AND password_respon=?";
    $db = $this->getDb()->conectar();
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss', $this->usuario,$this->password);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();


}

}


?>
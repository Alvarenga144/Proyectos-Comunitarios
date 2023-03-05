<?php

class MunicipioModelo extends Model
{
    private $id_Municipio;
    private $nombre_Municipio;
    private $id_Departamento;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of id_Municipio
     */
    public function getId_Municipio()
    {
        return $this->id_Municipio;
    }

    /**
     * Set the value of id_Municipio
     *
     * @return  self
     */
    public function setId_Municipio($id_Municipio)
    {
        $this->id_Municipio = $id_Municipio;

        return $this;
    }

    /**
     * Get the value of nombre_Municipio
     */
    public function getNombre_Municipio()
    {
        return $this->nombre_Municipio;
    }

    /**
     * Set the value of nombre_Municipio
     *
     * @return  self
     */
    public function setNombre_Municipio($nombre_Municipio)
    {
        $this->nombre_Municipio = $nombre_Municipio;

        return $this;
    }

    /**
     * Get the value of id_Departamento
     */
    public function getId_Departamento()
    {
        return $this->id_Departamento;
    }

    /**
     * Set the value of id_Departamento
     *
     * @return  self
     */
    public function setId_Departamento($id_Departamento)
    {
        $this->id_Departamento = $id_Departamento;

        return $this;
    }

    public function listadoMunicipio()
    {

        $sql = "SELECT m.id_Municipio, m.nombre_Municipio, d.nombre_Departamento AS id_Departamento FROM municipios m INNER JOIN departamentos d ON m.id_Departamento=d.id_Departamento ";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        $arreglo = [];
        while ($fila = $stmt->fetch_array()) {
            $arreglo[] = $fila;
        }

        return $arreglo;
    }

    public function insertarMunicipio()
    {
        $sql = "INSERT INTO municipios (nombre_Municipio,id_Departamento) VALUES (?,?)";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('si', $this->nombre_Municipio, $this->id_Departamento,);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    public function listadoDepartamentos()
    {
        $sql = "SELECT * FROM departamentos";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        $arreglo = [];
        while ($fila = $stmt->fetch_array()) {
            $arreglo[] = $fila;
        }
        return $arreglo;
    }

    public function modificarMunicipio()
    {
        $sql = "UPDATE municipios SET nombre_Municipio=?, id_Departamento=? WHERE id_Municipio=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('sii', $this->nombre_Municipio, $this->id_Departamento, $this->id_Municipio);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    public function MunicipioFiltrado()
    {
        $sql = "SELECT * FROM municipios WHERE id_Municipio=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i', $this->id_Municipio);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_array();
    }

    public function eliminarMunicipio()
    {
        $sql = "DELETE FROM municipios  WHERE id_Municipio=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i', $this->id_Municipio);
        $stmt->execute();

        return $stmt->affected_rows;
    }
}

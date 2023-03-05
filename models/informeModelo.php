<?php

class InformeModelo extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function reporteResponsables()
    {
        $sql = "SELECT * FROM responsables";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        while ($fila = $stmt->fetch_array()) {
            $arreglo[] = $fila;
        }

        return $arreglo;
    }

    public function reporteProyectos()
    {
        $sql = "SELECT * FROM   acontecimientos";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        while ($fila = $stmt->fetch_array()) {
            $arreglo[] = $fila;
        }
    }

    // Primero se crea una función para mostrar solo los estados

    public function getEstados()
    {
        $arreglo = [];
        $sql = 'select distinct estado from acontecimientos';
        $datos = $this->getDb()->conectar()->query($sql);
        while ($fila = $datos->fetch_assoc()) {
            $arreglo[] = $fila;
        }
        return $arreglo;
    }

    public function acontecimiento($estado)
    {
        $arreglo = [];
        $sql = "SELECT t.acontecimiento as tipo, a.estado as estado, nombre_Acont as acontecimiento from acontecimientos a INNER
        JOIN tipoAcontecimiento t ON a.id_TipoAcont=t.id_tipoAcont WHERE a.estado='" . $estado . "'";
        $datos = $this->getDb()->conectar()->query($sql);
        while ($fila = $datos->fetch_assoc()) {
            $arreglo[] = $fila;
        }
        return $arreglo;
    }
}
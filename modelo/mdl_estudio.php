<?php
require("conexion.php");
class mdl_estudio
{
    public $id_Carrera;
    public $nombre;
    public $modalidad;
    public $obj_con;

    function __construct()
    {

        $this->id_usuario = 0;
        $this->nombre = "";
        $this->modalidad = "";
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function insertar()
    {
        $sql = "INSERT INTO carrera (nombrecarrera,modalidad,activocarrera) VALUE ('$this->nombre','$this->modalidad',1);";
        $this->obj_con->sin_retorno($sql);

    }
    public function modificar()
    {
        $sql="UPDATE carrera SET nombrecarrera='$this->nombre' where id_Carrera='$this->id_Carrera';";
        $this->obj_con->sin_retorno($sql);

    }

    public function listar()
    {
        $sql = "SELECT * FROM carrera ORDER BY id_Carrera ;";
        return $this->obj_con->con_retorno($sql);
    }
}
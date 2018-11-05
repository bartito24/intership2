<?php
require("conexion.php");
class mdl_asignatura
{
    public $id_asignatura;
    public $nombreasignatura;
    public $nivel;
    public $descripcionasig;
    public $activoasignatura;
    public $obj_con;

    function __construct()
    {

        $this->id_asignatura = 0;
        $this->nombreasignatura = "";
        $this->nivel = 0;
        $this->descripcionasig = 0;
        $this->activoasignatura = 0;
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function insertar()
    {
        $sql = "INSERT INTO asignatura (id_asignatura,nombreasignatura,nivel,descripcionasig,activoasignatura) VALUE ('$this->id_asignatura','$this->nombreasignatura','$this->nivel','$this->descripcionasig',1);";
        $this->obj_con->sin_retorno($sql);
        echo ($sql);

    }
    public function modificar()
    {
        $sql="UPDATE asignatura SET nombreasignatura='$this->nombreasignatura', nivel='$this->nivel', descripcionasig='$this->descripcionasig', activoasignatura='$this->activoasignatura' where id_asignatura='$this->id_asignatura';";
        $this->obj_con->sin_retorno($sql);

    }

    public function listar()
    {
        $sql = "SELECT * FROM asignatura where activoasignatura=1 ORDER BY id_asignatura;";
        return $this->obj_con->con_retorno($sql);
    }
    public function Eliminar($id)
    {
        $sql = "UPDATE asignatura SET activoasignatura=0 WHERE id_asignatura=$id ";
        $this->obj_con->sin_retorno($sql);
    }
}
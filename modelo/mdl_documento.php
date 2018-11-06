<?php
require("conexion.php");
class mdl_documento
{
    private $id_documentacion;
    public $nombredoc;
    public $fechaentrega;
    public $respaldo;
    public $obj_con;
    function __construct()
    {
        $this->id_documentacion=0;
        $this->nombredoc="";
        $this->fechaentrega="";
        $this->respaldo="";
        $this->obj_con=new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;

    }

    public function insertar_documento()
    {
        $sql="insert into documentacion (nombredoc, fechaentrega, respaldo) value ('$this->nombredoc',$this->fechaentrega,$this->respaldo)";
        $this->obj_con->sin_retorno($sql);
    }
    public function  listar_documento(){
        $sql="select * from documentacion";
        return $this->obj_con->con_retorno($sql);
    }
}
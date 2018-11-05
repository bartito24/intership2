<?php
require("../modelo/mdl_documento.php");
class ctrl_documento
{
    public $obj_mod;

    function __construct()
    {
        $this->obj_mod = new mdl_documento();
    }

    public function insertar_documento($n)
    {
        $this->obj_mod->set("nombredoc", $n["nombredoc"]);
        $this->obj_mod->set("fechaentrega", $n["fechaentrega"]);
        $this->obj_mod->set("respaldo", $n["respaldo"]);

        $this->obj_mod->insertar_documento();

        echo "<script> window.location.href='../admin/docs/listar_documento.php';</script>";

    }
    public function listar_documento(){
       return $this->obj_mod->listar_documento();
    }
}
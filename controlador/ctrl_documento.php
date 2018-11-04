<?php
require("../modelo/mdl_documento.php");
class ctrl_requisito
{
    public $obj_mod;

    function __construct()
    {
        $this->obj_mod = new mdl_documento();
    }

    public function insertar_requisito($n)
    {
        $this->obj_mod->set("nombredocumento", $n["documento"]);

        $this->obj_mod->insertar_documento();

        echo "<script> window.location.href='../admin/docs/documento.php';</script>";

    }
    public function listar_documento(){
       return $this->obj_mod->listar_documento();
    }
}
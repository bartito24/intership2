<?php
require("../modelo/mdl_requisito.php");
class ctrl_requisito
{
    public $obj_mod;

    function __construct()
    {
        $this->obj_mod = new mdl_requisito();
    }

    public function insertar_requisito($n)
    {
        $this->obj_mod->set("nombrerequisitoplatilla", $n["requisito"]);

        $this->obj_mod->insertar_requisito();

        echo "<script> window.location.href='../admin/docs/tramites.php';</script>";

    }
    public function listar_requisito(){
       return $this->obj_mod->listar_requisito();
    }
}
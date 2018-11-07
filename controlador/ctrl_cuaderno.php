
<?php

require("../modelo/mdl_cuaderno.php");

class ctrl_cuaderno{
    public $obj_mod;

    public function __construct(){
        $this->obj_mod=new mdl_cuaderno();
    }

    public function insertar($p){
        print_r($p);
        $this->obj_mod->set("id_cuadernillo" ,$p['id_cuadernillo']);
        $this->obj_mod->set("fecha_registro" ,$p['fecha_registro']);
        $this->obj_mod->set("fecha" ,$p['fecha']);
        $this->obj_mod->set("decripcion" ,$p['decripcion']);
        $this->obj_mod->set("numero_semana" ,$p['numero_semana']);
        $this->obj_mod->insertar();
    }
    public function modificar($p){
        $this->obj_mod->set("id_cuadernillo" ,$p['id_cuadernillo']);
        $this->obj_mod->set("fecha_registro" ,$p['fecha_registro']);
        $this->obj_mod->set("fecha" ,$p['fecha']);
        $this->obj_mod->set("decripcion" ,$p['decripcion']);
        $this->obj_mod->set("numero_semana" ,$p['numero_semana']);
        $this->obj_mod->modificar();
    }
    public function eliminar($id){
        $this->obj_mod->eliminar($id);
    }
}

?>




<?php
require("../controlador/ctrl_empresa.php");
$obj=new ctrl_empresa();

if (isset($_POST['registrar'])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_empresa.php';</script>";
}
elseif (isset($_POST['modificar'])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_empresa.php';</script>";
} 

<?php
require("../controlador/ctrl_cuaderno.php");
$obj=new ctrl_cuaderno();

if (isset($_POST['registrar'])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_cuaderno.php';</script>";
}
elseif (isset($_POST['modificar'])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_cuaderno.php';</script>";
} elseif (isset($_GET['id_cuadernillo'])){
    $obj->eliminar($_GET['id_cuadernillo']);
    echo "<script> window.location.href='../admin/docs/listar_cuaderno.php';</script>";
}
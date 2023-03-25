<?php
session_start();
include('../clases/Conexion.php');
include('../clases/Crud.php');

$Crud = new Crud();
$id = $_POST['_id'];
$datos = array(
    "paterno" => $_POST['paterno'],
    "materno" => $_POST['materno'],
    "nombre" => $_POST['nombre'],
    "fecha" => $_POST['fecha'],
);

$res = $Crud->actualizar($id,$datos);
if ($res->getModifiedCount()>0 || $res->getmatchedCount()>0) {
    $_SESSION['mensaje_crud'] = 'update';
    header("location:../../index.php");
}else{
    print_r($res);
}
?>
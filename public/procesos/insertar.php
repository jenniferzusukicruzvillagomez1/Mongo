<?php
session_start();
include('../clases/Conexion.php');
include('../clases/Crud.php');

$Crud = new Crud();

$datos = array(
    "paterno" => $_POST['paterno'],
    "materno" => $_POST['materno'],
    "nombre" => $_POST['nombre'],
    "fecha" => $_POST['fecha'],
);

$res = $Crud->insertardatos($datos);
if ($res->getInsertedId()>0) {
    $_SESSION['mensaje_crud'] = 'insert';
    header("location:../../index.php");
}else{
    print_r($res);
}
?>
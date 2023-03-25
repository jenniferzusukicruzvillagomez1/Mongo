<?php
session_start();

include('../clases/Conexion.php');
include('../clases/Crud.php');
$crud = new Crud();
$id = $_POST['_id'];
$res = $crud->eliminar($id);
if ($res->getDeletedCount()>0) {
    $_SESSION['mensaje_crud'] = 'delete';
   header("location:../../index.php");
}else{
    print_r($res);
}
?>
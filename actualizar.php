<?php
include "./header.php";
include "./scripts.php";
include './public/clases/Conexion.php';
include './public/clases/Crud.php';
$crud = new Crud();
$id = $_POST['_id'];
$doc = $crud->obtenerdoc($id);
$idmongo = $doc->_id;
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                <a href="index.php" class="btn btn-outline-info">
                   <i class="fa-solid fa-angles-left"></i>
                Regresar
                </a>
                <h2>Actualizar registro</h2>
                <hr>
                <form action="./public/procesos/actualizar.php" method="post">
                <input type="text"  class="form-control" value="<?php echo $idmongo;?>" name="_id" hidden>
                    <label for="paterno" class="mt-3 mb-2">Apellido paterno</label>
                    <input type="text" name="paterno" class="form-control" id="paterno" value="<?php echo $doc->paterno?>">
                    <label for="materno" class="mt-3 mb-2">Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" id="materno" value="<?php echo $doc->materno?>">
                    <label for="nombre" class="mt-3 mb-2">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $doc->nombre?>">
                    <label for="fecha" class="mt-3 mb-2">Fecha de Nacimiento</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" value="<?php echo $doc->fecha?>">
                    <button class="btn btn-warning mt-4">
                        <i class="fa-solid fa-pen me-2"></i>
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

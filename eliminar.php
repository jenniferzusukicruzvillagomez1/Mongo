<?php
include "./header.php";
include "./scripts.php";
include './public/clases/Conexion.php';
include './public/clases/Crud.php';
$crud = new Crud();
$id = $_POST['_id'];
$doc = $crud->obtenerdoc($id);
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
                <h2>Eliminar registro</h2>
                <table class="table table-bordered">
                    <thead>
                        <th>Apellido Paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $doc->paterno ; ?></td>
                            <td><?php echo $doc->materno ; ?></td>
                            <td><?php echo $doc->nombre ; ?></td>
                            <td><?php echo $doc->fecha ; ?></td>
                        </tr>
                    </tbody>
                </table>           
                <hr>
                <div class="alert alert-danger">
                    <p>¿Esta seguro de eliminar este registro?</p>
                    <p>Una vez eliminado no podrá ser recuperado</p>
                </div>
                <form action="./public/procesos/eliminar.php" method="post">
                <input type="text" name="_id" value="<?php echo $doc->_id?>" hidden>
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-user-xmark"></i>Eliminar
                    </button>
                </form>     
            </div>
        </div>
    </div>
  </div>
</div>

<?php
include "./header.php";
require_once './public/clases/Conexion.php';
require_once './public/clases/Crud.php';
$crud =  new Crud();
$datos = $crud->mostrardatos();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                <h2>Crud con mongo y php</h2>
                <a href="./agregar.php" class="btn btn-primary">
                   <i class="fa-solid fa-user-plus"></i>
                Agregar un nuevo registro
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered">
                    <thead>
                        <th>Apellido Paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($datos as $item) { ?>
                            <td><?php echo $item->paterno; ?></td>
                            <td><?php echo $item->materno; ?></td>
                            <td><?php echo $item->nombre; ?></td>
                            <td><?php echo $item->fecha; ?></td>
                            <?php }?>
                            <td class="text-center">
                                <form action="./actualizar.php">
                                    <buton-btn class="btn btn-warning"><i class="fa-solid fa-user-pen">    </i></buton-btn>
                                </form>
                            </td>
                            <td class="text-center">
                            <form action="./eliminar.php">
                                    <buton-btn class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></buton-btn>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
<?php
include "./scripts.php"
?>
<?php
session_start();
include "./header.php";
require_once './public/clases/Conexion.php';
require_once './public/clases/Crud.php';
$crud =  new Crud();
$datos = $crud->mostrardatos();
$mensaje = '';
if (isset ($_SESSION['mensaje_crud'])) {
    $mensaje = $crud->mensaje($_SESSION['mensaje_crud']);
    unset($_SESSION['mensaje_crud']);
}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                <h2>Crud con mongo y php | JZCV</h2>
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
                    <?php foreach($datos as $item) { ?>
                        <tr>
                            
                            <td><?php echo $item->paterno; ?></td>
                            <td><?php echo $item->materno; ?></td>
                            <td><?php echo $item->nombre; ?></td>
                            <td><?php echo $item->fecha; ?></td>
                           
                            <td class="text-center">
                                <form action="./actualizar.php" method="post">
                                <input type="text" value="<?php echo $item->_id;?>" name="_id" hidden>
                                    <button class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></button>
                                </form>
                            </td>
                            <td class="text-center">
                            <form action="./eliminar.php"  method="post">
                                <input type="text" value="<?php echo $item->_id;?>" name="_id" hidden>
                                    <button class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php }?>
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
<script>
    let mensaje = <?php echo $mensaje?>;
    console.log(mensaje);
</script>
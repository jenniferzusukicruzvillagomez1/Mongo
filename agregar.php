
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                <a href="index.php" class="btn btn-outline-info">
                   <i class="fa-solid fa-angles-left"></i>
                Regresar
                </a>
                <h2>Agregar nuevo registro</h2>
                <hr>
                <form action="" method="post">
                    <label for="paterno" class="mt-3 mb-2">Apellido paterno</label>
                    <input type="text" name="paterno" class="form-control" id="paterno">
                    <label for="materno" class="mt-3 mb-2">Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" id="materno">
                    <label for="nombre" class="mt-3 mb-2">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre">
                    <label for="fecha" class="mt-3 mb-2">Fecha de Nacimiento</label>
                    <input type="date" name="fecha" class="form-control" id="fecha">
                    <button class="btn btn-primary mt-4">
                        <i class="fa-solid fa-floppy-disk me-2"></i>
                        Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
<?php
include "./header.php";
include "./scripts.php"
?>
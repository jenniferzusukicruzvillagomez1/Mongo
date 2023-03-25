<?php 
class Crud extends Conexion{
    public function mostrardatos(){
        try {
            $conexion = parent:: conectar(); 
            $coleccion = $conexion->personas;
            $datos = $coleccion->find(); 
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function obtenerdoc($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->personas;
            $documentos = $coleccion->findOne(
                array(
                    '_id' => new MongoDB\BSON\ObjectId($id)
                )
            );
            return $documentos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function insertardatos($datos){
        try {
            $conexion = parent:: conectar(); 
            $coleccion = $conexion->personas;
            $insercion = $coleccion->insertOne($datos); 
            return $insercion;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function eliminar($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->personas;
            $delete = $coleccion->deleteOne(
                array(
                    '_id' => new MongoDB\BSON\ObjectId($id)
                )
            );
            return $delete;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizar($id,$datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->personas;
            $res = $coleccion->updateOne(
                [
                    '_id' => new MongoDB\BSON\ObjectId($id)
                ],
                [
                    '$set'=> $datos
                ]
            );
            return $res;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function mensaje($mensaje){
        $msg = '';
        if ($mensaje == 'insert') {
            $msg = 'swal("Excelente","Agregado con éxito","success")';
        }else if ($mensaje == 'update') {
            $msg = 'swal("Excelente","Actualizado con éxito","success")';
        }else if ($mensaje == 'delete') {
            $msg = 'swal("Excelente","Eliminado con éxito","success")';
        }
        return $msg;
    }
}
?>
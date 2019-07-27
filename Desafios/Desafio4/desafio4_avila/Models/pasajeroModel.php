<?php

include_once "JWT\BeforeValidException.php";
include_once "JWT\ExpiredException.php";
include_once "JWT\JWT.php";
include_once "JWT\SignatureInvalidException.php";

use \Firebase\JWT\JWT;

    function getPasajero(){

        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM pasajero", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return $response;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function getID($ID){
        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM pasajero WHERE id='$ID'", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return empty($response) ? null : $response[0];
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function getNombre($nombre){
        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM pasajero WHERE nombre LIKE '%$nombre%'", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return empty($response) ? null : $response[0];
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function getApellido($apellido){
        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM pasajero WHERE apellido LIKE '%$apellido%'", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return empty($response) ? null : $response[0];
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function getDestino($destino){
        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM pasajero WHERE destino LIKE '%$destino%'", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return empty($response) ? null : $response[0];
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }
    
    function create($nombre, $apellido, $fecha_salida, $fecha_llegada, $destino){
        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("INSERT INTO pasajero (nombre, apellido, fecha_salida, fecha_llegada, destino) VALUES ('$nombre', '$apellido, '$fecha_salida', '$fecha_llegada', '$destino')");
            
            return $result->rowCount() > 0 ? true : false;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
            return null;
        }
    }

    function update($ID, $nombre, $apellido, $fecha_salida, $fecha_llegada, $destino){
        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("INSERT INTO pasajero (nombre, apellido, fecha_salida, fecha_llegada, destino) WHERE id='$ID' VALUES ('$nombre', '$apellido, '$fecha_salida', '$fecha_llegada', '$destino')");
            
            return $result->rowCount() > 0 ? true : false;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
            return null;
        }
    }

    function eliminar($ID){
        $dns='mysql:host=localhost;dbname=services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("DELETE FROM pasajero WHERE id='$ID'");
            
            return $result->rowCount() > 0 ? true : false;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
            return null;
        }
    }
?>

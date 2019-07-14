<?php

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
    
?>

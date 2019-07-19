<?php

include_once "JWT\BeforeValidException.php";
include_once "JWT\ExpiredException.php";
include_once "JWT\JWT.php";
include_once "JWT\SignatureInvalidException.php";

use \Firebase\JWT\JWT;

    function getFactura(){
        //Hecho en la clase 2
       /*  $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://192.168.1.201/cadi/index.php/factura");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        //var_dump(json_encode($response));

        return json_decode($response, true);

        //var_dump($response); */

        //clase 3 a partir de aqui

        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM factura", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $factura) {
                $payload = array(
                    'sub' => 'localhost',
                    'iss' => $factura['id'],
                    'nombre' => $factura['nombre_cliente']
                );

                $factura['token'] = JWT::encode($payload, 12345);
                $response[] = $factura;
            }
            return $response;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function getID($ID){
        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM factura WHERE id='$ID'", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $factura) {
                $response[] = $factura;
            }
            return empty($response) ? null : $response[0];
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function getNombre($nombre){
        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM factura WHERE nombre_cliente LIKE '%$nombre%'", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $factura) {
                $response[] = $factura;
            }
            return empty($response) ? null : $response[0];
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function isNameExist($nombre){
        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM factura WHERE nombre_cliente = '$nombre'", PDO::FETCH_ASSOC);

            $response = $result->rowCount() > 0 ? true : false;

            return $response;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function isExistId($ID){
        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM factura WHERE id='$ID'");
            
            $response = $result->rowCount() > 0 ? true : false;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
        }
    }

    function create($nombre, $cedula, $monto){
        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("INSERT INTO factura (nombre_cliente, cedula_cliente, monto) VALUES ('$nombre', '$cedula', '$monto')");
            
            return $result->rowCount() > 0 ? true : false;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
            return null;
        }
    }
    
    function eliminar($ID){
        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("DELETE FROM factura WHERE id='$ID'");
            
            return $result->rowCount() > 0 ? true : false;
        }catch(\Throwable $th){
            echo "La conexion a la base de datos no fue exitosa ".$th->getMessage();
            return null;
        }
    }
?>

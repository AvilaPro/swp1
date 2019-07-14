<?php

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

        $dns='mysql:host=localhost;dbname=php_services';
        try{
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
            ->query("SELECT * FROM factura", PDO::FETCH_ASSOC);
            $response = [];
            foreach ($result as $factura) {
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
    
?>

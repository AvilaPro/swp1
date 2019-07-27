<?php 
    
    function getAll(){
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
                ->query("SELECT * FROM pasajero", PDO::FETCH_ASSOC);

            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return $response;   

        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return null;
        }
    }

    
    function getId($id){
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $conexion = new PDO($dns, 'root', '');
            
            $result = $conexion
            ->query("SELECT * FROM pasajero Where id = '$id'", PDO::FETCH_ASSOC);

            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return $response[0];   
            
        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return null;
        }
    }
    
    function getName($name){
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $conexion = new PDO($dns, 'root', '');
            
            $result = $conexion
            ->query("SELECT * FROM pasajero where nombre like '%$name%' ", PDO::FETCH_ASSOC);
            
            $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            
            return $response;   
            
        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return null;
        }
    }

    function getLastName($lastName){
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $conexion = new PDO($dns, 'root', '');
            
            $result = $conexion
                ->query("SELECT * FROM pasajero where apellido like '%$lastName%' ", PDO::FETCH_ASSOC);
                
                $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return $response;   

        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return null;
        }
    }
    
    function getDestiny($destiny){
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $conexion = new PDO($dns, 'root', '');
            
            $result = $conexion
                ->query("SELECT * FROM pasajero where destino like '%$destiny%' ", PDO::FETCH_ASSOC);
                
                $response = [];
            foreach ($result as $pasajero) {
                $response[] = $pasajero;
            }
            return $response;   

        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return null;
        }
    }
    
    function newPassenger($name,$lastName,$fecha_salida,$fecha_regreso,$destino){
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $res = getName($name);
            if(count($res) == 0){
                $conexion = new PDO($dns, 'root', '');

                $result = $conexion->exec("INSERT INTO pasajero VALUES (NULL, '$name', '$lastName', '$fecha_salida', '$fecha_regreso', '$destino')");

                echo "Registro Exitoso";
                return $result;
            }else{
                echo "Ya hay un pasajero registrado con este nombre";
            }
        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return null;
        }
    }

    function isExistID($id){
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $conexion = new PDO($dns, 'root', '');
            
            $result = $conexion
            ->query("SELECT * FROM pasajero where id = '$id' ");

            $response = $result->rowCount() > 0 ? true : false;            
            return $response;   
            
        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return null;
        }
    }
    
        function deletePassenger($id){
            $dns = 'mysql:host=localhost;dbname=services';
            try {
                $conexion = new PDO($dns, 'root', '');
    
                $result = $conexion->query("DELETE from pasajero where id = '$id' ");
                
                $response = $result->rowCount() > 0 ? true : false;
    
                return $response;   
    
            } catch (\Throwable $th) {
                echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
                return null;
            }
        }
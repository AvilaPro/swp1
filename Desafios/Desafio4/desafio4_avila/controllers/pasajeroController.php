<?php
    include_once('Models/pasajeroModel.php');
    include_once('APIKey.php');

    function get(){
            
        if(!isset($_GET['apikey'])){
            var_dump("no estas enviando el API Key");
            exit();
        }else {
            if (APIKey::isValid($_GET['apikey'])) {
                if(isset($_GET['id'])){
                    $response = getID($_GET['id']);
                }elseif (isset($_GET['name'])) {
                    $response = getNombre($_GET['name']);
                }elseif (isset($_GET['lastname'])) {
                    $response = getNombre($_GET['lastname']);
                }elseif (isset($_GET['destination'])) {
                    $response = getNombre($_GET['destination']);
                }else{
                    $response = getPasajero();
                } 
                var_dump($response);
            }else {
                var_dump('Tu API KEY no es valida');
            }
        }

        function post(){
            
    
            $DATA = $_POST;
    
            if (!isset($DATA['nombre']) || empty($DATA['nombre'])) {
                echo "el nombre no fue enviado o esta vacio";
                exit();    
            }
            elseif (isNameExist($DATA['nombre'])) {
                echo "El nombre existe";
                exit();
            }
            if (!isset($DATA['apellido']) || empty($DATA['apellido'])) {
                echo "el apellido no fue enviado o esta vacio";
                exit();
                
            }
            if (!isset($DATA['fecha_salida']) || empty($DATA['fecha_salida'])) {
                echo "el fecha_salida no fue enviado o esta vacio";
                exit();
                
            }
            if (!isset($DATA['fecha_llegada']) || empty($DATA['fecha_llegada'])) {
                echo "el fecha_llegada no fue enviado o esta vacio";
                exit();
                
            }
            if (!isset($DATA['destino']) || empty($DATA['destino'])) {
                echo "el destino no fue enviado o esta vacio";
                exit();
                
            } 

    
            $isCreate = create($DATA['nombre'], $DATA['apellido'], $DATA['fecha_salida'], $DATA['fecha_llegada'], $DATA['destino']);
    
            if ($isCreate) {
                echo "Se guardo exitosamente";
            }else {
                echo "No se guardo";
            }
        }

        function put(){
            
    
            $DATA = $_POST;
    
            if (!isset($DATA['nombre']) || empty($DATA['nombre'])) {
                echo "el nombre no fue enviado o esta vacio";
                exit();    
            }
            elseif (isNameExist($DATA['nombre'])) {
                echo "El nombre existe";
                exit();
            }
            if (!isset($DATA['apellido']) || empty($DATA['apellido'])) {
                echo "el apellido no fue enviado o esta vacio";
                exit();
                
            }
            if (!isset($DATA['fecha_salida']) || empty($DATA['fecha_salida'])) {
                echo "el fecha_salida no fue enviado o esta vacio";
                exit();
                
            }
            if (!isset($DATA['fecha_llegada']) || empty($DATA['fecha_llegada'])) {
                echo "el fecha_llegada no fue enviado o esta vacio";
                exit();
                
            }
            if (!isset($DATA['destino']) || empty($DATA['destino'])) {
                echo "el destino no fue enviado o esta vacio";
                exit();
                
            } 

    
            $isUpdate = update($DATA['id'],$DATA['nombre'], $DATA['apellido'], $DATA['fecha_salida'], $DATA['fecha_llegada'], $DATA['destino']);
    
            if ($isUpdate) {
                echo "Se guardo exitosamente";
            }else {
                echo "No se guardo";
            }
        }

        function delete(){
            
            if (!isset($_GET['id']) || empty($_GET['id'])) {
                echo "el id no fue enviado o esta vacio";
                exit();
                
            } elseif (!isExistId($_GET['id'])) {
                echo "El id no existe";
                exit();
            }
    
            $isDelete = eliminar($_GET['id']);
    
            if ($isDelete) {
                echo "Se elimino exitosamente";
            }else {
                echo "No se elimino";
            }
        }


        
    }



?>
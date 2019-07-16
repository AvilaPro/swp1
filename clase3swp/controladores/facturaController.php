<?php
    include_once('Modelo/facturamodelo.php');
    include_once('APIKey.php');

    function get(){
        //var_dump($_GET);    
        if(!isset($_GET['apikey'])){
            var_dump("no estas enviando el API Key");
            exit();
        }else {
            if (APIKey::isValid($_GET['apikey'])) {
                if(isset($_GET['id'])){
                    $response = getID($_GET['id']);
                }elseif (isset($_GET['name'])) {
                    $response = getNombre($_GET['name']);
                }else{
                    $response = getFactura();
                } 
                var_dump($response);
            }else {
                var_dump('Tu API KEY no es valida');
            }
        }

        /* $response = getFactura();
        var_dump($response); */
        
    }

    function post(){
        //var_dump($_POST); esto para ver que se estaba enviando en la variable $_POST

        $DATA = $_POST;

        //recordar que deberiamos pasar la cedula y el monto
        //pero para ello deberiamos validad igual que como hicimos con el nombre
        //para asegurarnos de hacer una buena validacion

        if (!isset($DATA['nombre']) || empty($DATA['nombre'])) {
            echo "el nombre no fue enviado o esta vacio";
            exit();
            //$DATA['nombre'] = "Tu nombre es: ";
        } elseif (isNameExist($DATA['nombre'])) {
            echo "El nombre existe";
            exit();
        } 

        $isCreate = create($DATA['nombre'], 15926, 1000);

        if ($isCreate) {
            echo "Se guardo exitosamente";
        }else {
            echo "No se guardo";
        }

        //var_dump($DATA);
    }

    function put(){

    }

    function delete(){
        //var_dump($_GET);
        if (!isset($_GET['id']) || empty($_GET['id'])) {
            echo "el id no fue enviado o esta vacio";
            exit();
            //$DATA['nombre'] = "Tu nombre es: ";
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


?>
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
        
    }



?>
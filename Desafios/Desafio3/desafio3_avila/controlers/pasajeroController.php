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



?>
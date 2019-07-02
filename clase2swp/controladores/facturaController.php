<?php
    include_once('Modelo/facturamodelo.php');
    function get(){

        $response = getFactura();
        var_dump($response);
    }



?>
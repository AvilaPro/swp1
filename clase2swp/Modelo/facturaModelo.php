<?php

    function getFactura(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://192.168.1.201/cadi/index.php/factura");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        //var_dump(json_encode($response));

        return json_decode($response, true);

        //var_dump($response);

    }
    
?>

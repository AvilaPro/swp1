<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio3_SWP</title>
</head>
<body>
<h4 style=color:green>Desafio 3 SWP</h4>
    <?php
        include_once ('controladores/facturaController.php');
        
        get();

    /* $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://192.168.1.201/cadi/index.php/factura");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    var_dump(json_encode($response));

    $response = json_decode($response, true);

    var_dump($response); */

    ?>

</body>
</html>
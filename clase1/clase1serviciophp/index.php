<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase 1 PHPServices</title>
</head>
<body>
    <?php
        echo "<h1 style=color:green>Abrio bien</h1>";
        $json = '{"status" : true}';
        var_dump(json_decode($json));
        var_dump(json_decode($json,true));

        $objeto = json_decode($json);
        var_dump($objeto);

        var_dump(json_encode($objeto));

        $array = array(
            'status' => true,
            'data' => array(
                'nombre' => 'Eduardo',
                'edad' => 25,
                'cedula' => 19591303
            ),
            'notas' => array(25,40,100,90,85)
        );
        echo json_encode($array);
    ?>  
</body>
</html>
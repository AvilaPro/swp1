<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertir a Json</title>
</head>
<body>
    <?php
    $alumno = $_POST;
    $json = json_encode($alumno);
    print_r($json);

    ?>
</body>
</html>
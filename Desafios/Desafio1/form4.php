<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D1punto4</title>
</head>
<body>
    <form action="json.php" method="post">
        <h1>Datos del alumno</h1>
        <h4>nombre</h4>
        <input type="text" name="nombre" placeholder="nombre"><br>
        <h4>apellido</h4>
        <input type="text" name="apellido" placeholder="apellido"><br>
        <h4>cedula</h4>
        <input type="text" name="cedula" placeholder="cedula"><br>
        <h4>status</h4>
        <input type="checkbox" name="activo"><br><br>

        <h3>Desafio 1 Punto 5</h3>

        <h4>Nombre asignatura</h4>
        <input type="text" name='asignatura[nombre]'>
        <h4>Seccion</h4>
        <input type="text" name='asignatura[seccion]'>
        <h4>Notas</h4>
        <h6>Nota1</h6>
        <input type="number" name="asignatura[notas][]">
        <h6>Nota2</h6>
        <input type="number" name="asignatura[notas][]">
        <h6>Nota3</h6>
        <input type="number" name="asignatura[notas][]"><br><br>


        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>
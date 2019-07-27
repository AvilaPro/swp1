<?php
/**
 * ---------------------------------
 *  CONTROLADOR
 * ---------------------------------
 */
function PUT()
{

    //Validaciones del APIKEY y JWT


    if (isset($_GET['id'])) {
        // Obtenemos el ID a actualizar
        $ID = $_GET['id'];
        //validamos que el ID sea valido...
        // ...
        // ...
    }

    // Obtener los datos en el caso de sea de tipo JSON
    if ($_SERVER['Content-Type'] === 'application/json') {
        $DATA = json_decode(trim(file_get_contents("php://input")), true);
    }else{
        // Obtenemos los datos en caso de que sea por urlencoded
        $DATA = parse_str(file_get_contents("php://input"));
    }

    /**
     * Validamos todos los campos necesarios
     * ....
     * ....
     * .... 
     * Si todo esta bien continuamos, sino, mostramos un error al cliente y salimos de la ejecucion
     */

    //  Llamamos al modelo
    $isSuccess = Update($ID, $DATA['1'], $DATA['2'], $DATA['3']);
    if($isSuccess){
        // Devolvemos una respuesta correcta al cliente
    }else{
        // Devolvemos una respuesta de que ocurrio un error al cliente
    }
}



/**
 * ---------------------------------
 *  MODELO
 * ---------------------------------
 */

function Update($ID, $parametro1, $parametro2, $parametro3)
{
    $dns = 'mysql:host=localhost;dbname=php_services';
    try {
        $conexion = new PDO($dns, 'root', '');

        $result = $conexion
            ->query("UPDATE table_name SET column1 = $parametro1, column2 = $parametro2, column3=$parametro3 WHERE id=$ID");

        return $result->countRow() > 0 ? true : false;
    } catch (\Throwable $th) {
        echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
        // throw $th;
        return null;
    }
}

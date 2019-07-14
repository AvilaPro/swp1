<?php
    require_once 'config/Json.php';
    require_once 'config/Word.php';
    require_once 'config/config.php';
    require_once 'config/DB.php';
    require_once 'app/ApiRest.php';
    require_once 'app/ApiKey.php';
    require_once 'app/baseMVC/Controller.php';
    require_once 'app/baseMVC/Model.php';
    
    $api = new ApiRest();

?>

<hr>
<br><br>
<h2>Instrucciones de uso del Api:</h2>

<h3>el api funciona con query string delimitados por barra diagonal /</h3>
<p>use = http://localhost/desafio3/proyecto/[apikey]/[pasajeros]/ para buscar todos los pasajeros</p>
<p>si le agrega al final /[numero] buscara por id</p>
<p>si le agrega /nombre/[nombre a buscar] buscara por nombre</p>
<p>puede buscar por [ id , nombre , apellido , fecha_salida , fecha-llegada , destino ] siempre y cuando especifique el valor a buscar</p>
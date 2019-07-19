<?php
include_once "..\JWT\BeforeValidException.php";
include_once "..\JWT\ExpiredException.php";
include_once "..\JWT\JWT.php";
include_once "..\JWT\SignatureInvalidException.php";

use \Firebase\JWT\JWT;

$key = 12345;
$payload = array(
    "nombre" => "Eduardo",
    "apellido" => "Mejias",
    "sub" => "localhost/clase3swp"
);

$token = JWT::encode($payload, $key);
var_dump($token);

$body = JWT::decode($token, $key, array('HS256'));

var_dump( (array) $body);

?>
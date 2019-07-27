<?php

class APIKey
{

    public static function isValid($token)
    {
        $dns = 'mysql:host=localhost;dbname=services';
        try {
            $conexion = new PDO($dns, 'root', '');

            $result = $conexion
                ->query("SELECT * FROM api_key WHERE token='$token'", PDO::FETCH_ASSOC);

            foreach ($result as $apiKey) {

                if ($apiKey['token'] === $token) {
                    return true;
                }
            }
            return false;

            
        } catch (\Throwable $th) {
            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
            return false;
        }
    }
}

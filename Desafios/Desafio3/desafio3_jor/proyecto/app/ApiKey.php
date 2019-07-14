<?php
    abstract class ApiKey{
        static public function validToken($token){
            try {
                $query = DB::connect()->prepare(
                    "SELECT token FROM api_key WHERE token = :token"
                );
                $query->execute(['token' => $token]);
                if ($query->fetch()) {
                    return true;
                }else {
                    Json::getError('Invalid Api Key');
                }
            } catch (PDOException $ex) {
                Json::getError($ex->getMessage());
            }
        }
    }
    
?>
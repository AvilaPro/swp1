<?php
    abstract class DB {

        static public function connect() {
            try {
                $dns        = DB_CONNECTION . ':host=' . DB_HOST . ';dbname=' . DB_DBNAME . ';port=' . DB_PORT;
                $options    = [
                    PDO::ATTR_DEFAULT_FETCH_MODE    =>    PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE               =>    PDO::ERRMODE_EXCEPTION
                ];
                return new PDO($dns, DB_USERNAME, DB_PASSWORD, $options);
            } catch (PDOExeption $ex) {
                Json::getError($ex->getMessage());
            }
        }
    }
    
?>
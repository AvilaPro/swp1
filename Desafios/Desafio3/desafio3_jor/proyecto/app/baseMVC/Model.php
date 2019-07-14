<?php
    class Model {
        protected $statement;
        public function __construct() {
            $this->statement = DB::connect();
        }

        public function get($table){
            try {
                $query = $this->statement->prepare(
                    "SELECT * FROM $table"
                );
                $query->execute();
                return $query->fetchAll();

            } catch (PDOException $ex) {
                Json::getError($ex->getMessage());
            }
        }

        public function getById($table, $id){
            try {
                $query = $this->statement->prepare(
                    "SELECT * FROM $table WHERE id = :id"
                );
                $query->execute(['id' => $id]);
                return $result = $query->fetch();

            } catch (PDOException $ex) {
                Json::getError($ex->getMessage());
            }
        }
    }
    
?>
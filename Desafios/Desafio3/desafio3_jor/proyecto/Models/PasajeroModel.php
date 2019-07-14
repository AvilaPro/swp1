<?php

	class PasajeroModel extends Model {
		private $table;

		public function __construct(){
			parent::__construct();
			$this->table = 'pasajero';
		}

		public function read($id = null){
			if (is_null($id)) {
				return $this->get($this->table);
			} else {
				return $this->getById($this->table,$id);
			}			
		}

		public function getSpecial($items){
			try {
				$query = $this->statement->prepare(
					"SELECT * FROM $this->table WHERE " . $items[0] . " LIKE :search "
				);
				$query->execute(['search' => '%'.$items[1].'%']);
				return $query->fetchAll();
            } catch (PDOException $ex) {
                Json::getError($ex->getMessage());
            }	
		}

	}

?>
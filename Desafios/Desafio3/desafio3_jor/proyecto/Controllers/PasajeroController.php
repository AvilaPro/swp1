<?php

	class PasajeroController extends Controller {


		public function get(){		
			Json::getResult($this->model->read());
		}

		public function getById($id){		
			Json::getResult($this->model->read($id));
		}

		public function getBySpecial(Array $items){
			$total_items = count($items);
			$search = ['id','nombre','apellido','fecha_salida','fecha-llegada','destino'];
			if ($total_items < 2) {
				Json::getError('falta el valor a buscar');
			}else if ($total_items == 2) {
				foreach ($search as $value) {
					if ($items[0] === $value) {
						Json::getResult($this->model->getSpecial($items));
					}
				}			
			}
		}
	}

?>
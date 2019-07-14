<?php
    class Controller{
        protected $model;
        
        public function loadModel($model_name){
            $model_file_name = 'Models/' . $model_name . '.php';
            if (file_exists($model_file_name)) {
                require $model_file_name;
                $this->model = new $model_name();
            }else{
                Json::getError('no founds model');
            }
        }
    }
    
?>
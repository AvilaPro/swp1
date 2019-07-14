<?php

    class ApiRest {
        public function __construct(){
            $url = $_GET['url'] ?? null;
            $url = rtrim($url, '/');
            $url = explode('/',$url);

            if (empty($url[0])) {
                Json::getError('missing access key','Required format:[YOUR_API_KEY]',101);
            } else {
                if(ApiKey::validToken($url[0])){
                    if (empty($url[1])) {
                        Json::getError('missing controllers');
                        
                    }else{
                        $controller_name       = Word::toSingular(ucfirst($url[1])) . 'Controller';
                        $model_name            = Word::toSingular(ucfirst($url[1])) . 'Model';
                        $controller_file_name   = 'Controllers/' . $controller_name . '.php';
                        
                        if (file_exists($controller_file_name)) {
                            require $controller_file_name;
                            $controller = new $controller_name();
                            $controller->loadModel($model_name);
                            
                            $total_param = count($url); 
                            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                                if ($total_param == 2) {
                                    $controller->get();
                                }elseif ($total_param >= 3) {
                                    if (is_numeric($url[2]) && $total_param == 3) {
                                        $controller->getById($url[2]);
                                    }else{    
                                        for ($i=2; $i < $total_param; $i++) { 
                                            $items[] = $url[$i];
                                        }
                                        $controller->getBySpecial($items);      
                                    }
                                }
                            }
                        } else {
                            Json::getError('no existe el archivo controlador');
                        }
                    }
                }                
            }
        }
    }
    
?>
<?php
    abstract class Json{
        static public function getError($message ,$type = 'no found' ,$code = 404){
            $error = json_encode([
                'success'   => false,
                'error'     => [
                    'code'      => $code ?? 404,
                    'type'      => $type ?? 'no found',
                    'info'      => $message
                ]
            ]);
            print_r($error);
        }

        static public function getResult($items ,$type = 'ok' ,$code = 200){
            if (empty($items)) {
                $items = null;
            }
            $error = json_encode([
                'success'   => true,
                'code'      => $code,
                'type'      => $type,
                'items'     => $items ?? 'no result'
            ]);
            print_r($error);
        }

    }
    
?>
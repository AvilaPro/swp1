<?php
    abstract class Word {
        static public function toPlural(string $string){
            if (substr($string,-1) == 'y') {
                return substr($string,0,-1) . 'ies';
            } else {
                return $string . 's';
            }            
        }
        static public function toSingular(string $string){
            if (substr($string,-3) == 'ies') {
                return substr($string,0,-3) . 'y';
            } elseif (substr($string,-1) == 's'){
                return substr($string,0,-1);
            }else{
                return $string;
            }          
        }
    }
    
?>
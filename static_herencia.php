<?php
class Tipo_animal{
    protected static $lista_animales = array(
        "leon" => array(),
        "aguila"=> array(),
        "ballena"=> array()
    );
    protected static function Extremidades($arg){
        if(array_key_exists($arg, self::$lista_animales)){
            self::validar($arg);
        }
        return self::$lista_animales; 
    }
    protected static function validar($arg){
        switch ($arg){
            case "leon";
                array_push(self::$lista_animales[$arg], "4 patas con garra");
            break;
            case "aguila";
                array_push(self::$lista_animales[$arg], "2 paticas");
            break;
            case "ballena";
                array_push(self::$lista_animales[$arg], "2 aletas");
            break;
            default:
                # code...
                break;
        }
    }
}
class animal extends Tipo_animal{
    public static $patas;
    public $pelaje;   
    public static function Datos_animales($arg){
        self::$patas = self::Extremidades($arg); 
    }

}
animal::Datos_animales("ballena");
var_dump(animal::$patas);

?>
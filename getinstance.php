<?php
class Humano{
    public static $humano;
    public $saludar;
    public function __construct($arg){
        $this->saludar = $arg;
    }
    public static function getinstance($arg=null){
        if(!(self::$humano instanceof self)){
            self::$humano = new Humano($arg);
        }
        return self::$humano;
    }
    public function saludar(){
        return $this->saludar;
    }
    public function hablar(){
        return "Richard";
    }
}
$obj = Humano::getinstance("hola como estas");
echo $obj->hablar();



?>
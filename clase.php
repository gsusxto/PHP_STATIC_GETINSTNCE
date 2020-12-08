<?php

class Humano{
    public $cabello = "Negro";
    public $vocbulario;
    public function saludar(){
            return "hola como estas";
    }
    public function Hablar(){
            return $this->saludar();
    }
    public function Lenguaje(){
        return $this->vocabulario = "español";
    }
}
$obj = new Humano();
echo $obj->saludar();
echo"<br>";
echo $obj->cabello;
echo"<br>";
echo $obj->hablar();
echo"<br>";
$obj->lenguaje();
echo $obj->vocabulario;

?>
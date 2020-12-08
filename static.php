<?php

class Humano{
    public static $cabello = "Negro";
    public static $vocabulario;
    public static function saludar(){
             return "hola como estas";
    }
    public static function Hablar(){
            return self::saludar();
    }
    public static function Lenguaje(){
         self::$vocabulario = "español";
    }
}
echo Humano::saludar();
echo"<br>";
echo Humano::$cabello;
echo"<br>";
echo Humano::Hablar();
echo"<br>";
Humano::Lenguaje();
echo Humano::$vocabulario;

?>
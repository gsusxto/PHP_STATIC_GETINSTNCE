<?php
class Tipo_animal{
    protected $lista_animales = array(
        "leon" => array(),
        "aguila"=> array(),
        "ballena"=> array()
    );
    protected function Extremidades($arg){
        if(array_key_exists($arg, $this->lista_animales)){
            $this->validar($arg);
        }
        return $this->lista_animales; 
    }
    protected function validar($arg){
        switch ($arg){
            case "leon";
                array_push($this->lista_animales[$arg], "4 patas con garra");
            break;
            case "aguila";
                array_push($this->lista_animales[$arg], "2 paticas");
            break;
            case "ballena";
                array_push($this->lista_animales[$arg], "2 aletas");
            break;
            default:
                # code...
                break;
        }
    }
}
class animal extends Tipo_animal{
    public $patas;
    public $pelaje;   
    public function Datos_animales($arg){
        $this->patas = $this->Extremidades($arg); 
    }

}
$obj = new animal();
$obj->Datos_animales("ballena");
var_dump($obj->patas);

?>
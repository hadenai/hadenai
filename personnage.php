<?php
class Personnage{
    public $vie =80;
    public $atk =20;
    public $name;

    public function __construct ($name, $atk, $vie){
        $this->name = $name;
        $this->atk = $atk;
        $this->vie = $vie;
    }
    public function crier(){
        return 'LEEROY JENKINS';
    }
    public function regenerer($vie = null){
        if (is_null ($vie) ){
            $this->vie = 100;

        } else {
            return $this->vie +=$vie;
        }
    }
    public function death(){
        if ($this->vie ==0) {
            return 'death';

        } else{
            return 'i am fucking alive';
        }
    }
    public function baffe($vie = null){
        if (is_null ($vie) ){
            $this->vie = 0;

        } else {
            return $this->vie -=$vie;
        }
    }
    public function attaque($cible){
        $cible->vie -= $this->atk;
    }


}
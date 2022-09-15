<?php


class calculo{

    public $nombre;
    public $ht;
    public $pph;

    public function __construct($nombre, $ht, $pph){

        $this->nombre = $nombre;
        $this->ht = $ht;
        $this->pph = $pph;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(){
        $this->nombre = $nombre;
    }

    public function getht(){
        return $this->ht;
    }

    public function ht(){
        $this->ht = $ht;
    }
    public function getpph(){
        return $this->pph;
    }

    public function setpph(){
        $this->pph = $pph;
    }

    public function salbrut($ht, $pph){
        return $ht*$pph;
    }

    public function desc($ht, $pph){
        return ($ht*$pph)*0.2;
    }

    public function salnet($ht, $pph){
        $salariobruto = $ht*$pph;
        $descuento = $salariobruto*0.2;
        return $salariobruto-$descuento;
    }



}

?>
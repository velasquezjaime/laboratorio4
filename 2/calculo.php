<?php


class calculo{

    public $cant;
    public $muj;
    public $hom;

    public function __construct($cant, $muj, $hom){

        $this->cant = $cant;
        $this->muj = $muj;
        $this->hom = $hom;

    }

    public function getCant(){
        return $this->cant;
    }

    public function setCant(){
        $this->cant = $cant;
    }

    public function getmuj(){
        return $this->muj;
    }

    public function setmuj(){
        $this->muj = $muj;
    }
    public function gethom(){
        return $this->hom;
    }

    public function sethom(){
        $this->hom = $hom;
    }


    public function percmuj($muj, $cant){
        return ($muj/$cant)*100;
    }

    public function perchom($hom, $cant){
        return ($hom/$cant)*100;
    }



}

?>
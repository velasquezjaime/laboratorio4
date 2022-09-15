<?php


class calculo{

    public $pass;
    public $salt;

    public function __construct($pass, $salt){

        $this->pass = $pass;
        $this->salt = $salt;

    }

    public function getpass(){
        return $this->pass;
    }

    public function setpass(){
        $this->pass = $pass;
    }

    public function getsalt(){
        return $this->salt;
    }

    public function setsalt(){
        $this->salt = $salt;
    }

    public function base($pass, $salt){
        return base64_encode('$salt.$pass');
    }

    public function md5($pass, $salt){
        return md5('$salt.$pass');
    }
    
    public function sha1($pass, $salt){
        return sha1('$salt.$pass');
    }

    public function crc32($pass, $salt){
        return crc32('$salt.$pass');
    }

    public function crypt($pass, $salt){
        return  crypt ($pass, $salt);
    }

    public function sha224($pass, $salt){
        return hash('sha224', $pass.$salt);
    }

    public function sha512($pass, $salt){
        return hash('sha512', $pass.$salt);
    }
    public function whirlpool($pass, $salt){
        return hash('whirlpool', $pass.$salt);
    }
    public function snefru($pass, $salt){
        return hash('snefru', $pass.$salt);
    }
    public function haval1283($pass, $salt){
        return hash('haval128,3', $pass.$salt);
    }
    public function haval1285($pass, $salt){
        return hash('haval128,5', $pass.$salt);
    }
    




}

?>
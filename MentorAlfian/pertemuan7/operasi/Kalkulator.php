<?php

interface OperasiInterface{
    public function do($angka, $hasil);
}

class Kalkulator{

    protected $hasil;
    protected $operasi;

    public function setOperasi(OperasiInterface $operasi){
        $this->operasi = $operasi;
    }
    
    public function Kalkulasi(){
    foreach(func_get_arg() as $angka){
        $this->hasil = $this->operasi->do($angka,$this->hasil);
    }
}

    public function getHasil(){
    return $this->hasil;
}
}


class Tambah implements OperasiInterface {
    public function do($angka, $hasil){ 
        return $hasil + $angka;
    }
}

class Kurang implements OperasiInterface {
    public function do($angka, $hasil){ 
        return $hasil - $angka;
    }
}

class Kali implements OperasiInterface {
    public function do($angka, $hasil){
        return $hasil * $angka;
    }
}

class Bagi implements OperasiInterface {
    public function do($angka, $hasil){
        return $hasil / $angka;
    }
}

class Modulo implements OperasiInterface {
    public function do($angka, $hasil){
        return $hasil % $angka;
    }
}

<?php 
class Mobil {
    public $merk;
    public $type;
    public $TopSpeed;
    public $Spoiler;
    public $Versi;
    public $Called;

    function set_merk($merk) {
        $this->merk = $merk;
    }
    function get_merk() {
        return $this->merk;
    }
    function set_type($type) {
        $this->type = $type;
    }
    function get_type() {
        return $this->type;
    }
    function getLabel(){
        return "$this->merk, $this->type";
    }
    function getCalled(){
      $str = "{$this->Called} : {$this->merk} Dengan Tipe {$this->type} Dan Dapat Menempuh Dengan Kecepatan {$this->TopSpeed}mph ";
      if( $this->Called == "Hyper"){
        $str .= "- {$this->Versi}";
      } else if($this->Called == "Super"){
        $str .= "~ {$this->Spoiler}";
      }
      return $str;
    }


    //  Construct
  function __construct($merk, $type, $TopSpeed, $Spoiler, $Versi, $Called) {
    $this->merk = $merk;
    $this->type = $type;
    $this->TopSpeed = $TopSpeed; 
    $this->Spoiler = $Spoiler;
    $this->Versi = $Versi;
    $this->Called = $Called;
  }

    //  Destruct
    
  function __destruct() {
    echo "Mobil Mu Adalah {$this->merk} Dengan Tipe {$this->type} Dan Dapat Menempuh Dengan Kecepatan {$this->TopSpeed}mph. "; 
    echo "<br>";
  }
}

// Membuat Objek Menggunakan Construct
// $Zonda = new Mobil("Pagani","HyperCar","300");
// $jesko = new Mobil("Koenigsegg","HyperCar","250");
// $SVJ = new Mobil("Lamborghini","SuperCar","200");

// Membuat Objek Manual 
// $jesko = new Mobil();
// $jesko->set_type('HyperCar');
// $jesko->set_merk('Koenigsegg');
// $jesko->TopSpeed('200');

// $SVJ = new Mobil();
// $SVJ->set_type('SuperCar');
// $SVJ->set_merk('Lamborghini');
// $SVJ->TopSpeed('200');


// echo "Jesko : " . $jesko->getLabel();
// echo "<br>";
// echo "Zonda : "  . $Zonda->getLabel();
// echo "<br>";
// var_dump($SVJ);


// Objek Type
// $apasaja adalah parameter yg  boleh di isi bebas dan (Mobil) adalah class Mobil   
class CetakInfoMobil{
  public function cetak( Mobil $apasaja ){
    $str = "{$apasaja->getLabel()} | Kecepatan {$apasaja-> TopSpeed}mph (Rp. 247 M)";
    return $str;
  }
}

// Inheritance 2
class Hyper extends Mobil{

}

class Super extends Mobil{
  
}

// $infoMobil = new CetakInfoMobil();
// echo $infoMobil->cetak($jesko);
// echo "<br>";

// Inheritance
$jesko = new Mobil("Koenigsegg","HyperCar","250",null, "V12", "Hyper");
$SVJ = new Mobil("Lamborghini","SuperCar","200","Big Wing", null,"Super");
$Zonda = new Mobil("Pagani","HyperCar","300",null, "V11", "Hyper");


// Output
echo "Menggunakan Inheritance";
echo "<br>";
echo $jesko->getCalled();
echo "<br>";
echo $SVJ->getCalled();
echo "<br>";
echo "<br>";

echo "Menggunakan Destruct";
echo "<br>";
?>
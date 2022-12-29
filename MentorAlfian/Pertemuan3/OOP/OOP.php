<?php 
class Mobil {
    public $merk;
    public $type;

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


     // Construct Dan Destruct
//   function __construct($merk, $type) {
//     $this->merk = $merk;
//     $this->type = $type; 
//   }
//   function __destruct() {
//     echo "The Mobil is {$this->merk} and the type is {$this->type}."; 
//   }
}

// $jesko = new Mobil("Koenigsegg","SuperCar");

$jesko = new Mobil();
$jesko->set_type('SuperCar');
$jesko->set_merk('Koenigsegg');

echo "Merek : " . $jesko->get_merk();
echo "<br>";
echo "Type : "  . $jesko->get_type();
echo "<br>";
var_dump($jesko);
?>
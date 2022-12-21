<!-- Menggunakan While -->
<?php
    function phpwhile(){
      $angka = 10;

    while($angka <= 100) {
        echo "Angkanya adlah: $angka <br>";
        $angka++;
    }  
    }
    
?>
<!-- Menggunakan Do ... While -->
<?php
    function phpdowhile(){
        $angka = 10;

    do {
        echo "Angkanya adlah: $angka <br>";
        $angka++;
    } while ($angka <= 100);
    }
    
?>
<!-- Menggunakan For -->
<?php
function phpfor(){
   for ($angka = 0; $angka <= 10; $angka++) {
    echo "Hitungan : $angka <br>";
 } 
}
 
?>
<!-- Menggunakan FOREACH -->
<?php
function phpforeach(){
    $mobil =["Corvette","Nissan","Aston Martin","Pagani"];

    echo "Daftar Merek <br>";
    foreach ($mobil as $merek) { 
        echo "$merek <br>";
    }
}
    
?>
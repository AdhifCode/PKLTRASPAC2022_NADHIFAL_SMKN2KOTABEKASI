
<?php
$nama = $_POST['nama'] ??"";
$usia = $_POST['usia'] ??"";
$jam = $_POST['jam'] ??"";
$bersama = $_POST['bersama'] ??"";

// function bersama(){
    if($usia < 20){
        $bersama === 'Sendiri';//sendirian
        $ruangan = "Private";
    }else{
        if($bersama === 'laki'){//pasangan
            $ruangan = "Terbuka";
        }elseif($bersama === 'Sendiri'){
            $ruangan = "Privat & Publik";
        }
    } 



if($jam < '14:00'){//sblm jam 14
    if($usia > 25){
        $status = "Boleh Masuk";
    }else{
        $status = "Tidak Boleh Masuk";
    }
}else{//jam 14 lebih
    if($usia < 25 or $usia > 25){
        $status ="Boleh Masuk";
    }else{
        $status = "Tidak Boleh Masuk";
    }
}

// function output(){
// if($_POST){
//     if($nama ){
//         echo "Upload Confirmed";
//         echo "Nama :" . $nama;
//         echo "Usia :" . $usia;
//         echo "Jam Datang :" . $jam;
//         echo "Status :" . $status;
//         echo "Ruang :" . $ruangan;
//     }else{
//       echo "Upload Failed<br>";
//       echo "Fill Form Correctly";
//     }
//   }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nama">Nama :</label><br>
        <input type="text" name="nama"><br>
        <label for="usia">Usia :</label><br>
        <input type="number" name="usia"><br>
        <label for="jam">Jam Datang :</label><br>
        <input type="time" name="jam"><br>
        <label for="bersama">Bersama :</label><br>
        <select name="bersama">
	        <option value="Sendiri">Sendiri</option>
	        <option value="laki">Teman Laki</option>
	        <option value="perempuan">Teman Perempuan</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
    <div class="output">
        <h4>Nama : <?php echo $nama ?><br></h4>
        <h4>Usia : <?php echo $usia ?><br></h4>
        <h4>Jam Datang : <?php echo $jam ?><br></h4>
        <h4>Status : <?php echo $status ?><br></h4>
        <h4>Ruang : <?php echo $ruangan ?></h4>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form</title>
    <style>
   
    </style>
  </head>
  <body>
  <form method="POST" enctype="multipart/form-data">
      <input type="date" name="tanggals" placeholder="Tanggal"/>
      <input type="file" name="files" accept="image/*">
      <button type="submit">Masukan</button>
    </form>
  </body>
</html>

<?php
class Upload{

  public $file;
  public $tanggal;
  public $tmp;
  public $location;
  public $save;

  
  
  public function simpan($tanggal,$save){
    $file = $_FILES['files']['name'] ??'';
    $tmp =$_FILES['files']['tmp_name'] ??'';
    $location = "uploads/";
  
    if($_POST){
      if($tanggal ){
        move_uploaded_file($tmp, $location.$file);
        echo "Upload Confirmed";
        echo "Date :" . $tanggal;
      }else{
        echo "Upload Failed<br>";
        echo "Fill Form Correctly";
      }
    }
  }
}

    
$test = new Upload();
echo $test->simpan($_POST['tanggals'] ??'',$_POST['masukan'] ??'');

?>


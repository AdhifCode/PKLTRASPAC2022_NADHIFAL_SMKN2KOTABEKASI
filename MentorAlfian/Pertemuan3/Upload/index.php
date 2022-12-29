
<?php
function simpan(){
  $file = $_FILES['files']['name'] ??'';
  $tanggal = $_GET['tanggals'] ??'';
  $tmp =$_FILES['files']['tmp_name'] ??'';
  $location = "uploads/";
  $save = $_GET['masukan'] ??'';

  if($_GET){
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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form</title>
    <style>
   
    </style>
  </head>
  <body>
  <form method="GET" enctype="multipart/form-data">
      <input type="date" name="tanggals" placeholder="Tanggal"/>
      <input type="file" name="files" accept="image/*">
      <button type="submit">Masukan</button>

      <h4><?php echo simpan();?></h4>
    </form>
  </body>
</html>


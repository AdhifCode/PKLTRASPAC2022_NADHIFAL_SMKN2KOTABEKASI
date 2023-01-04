<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="pengecekanNilai.php" method="get">
Masukan Nilai <input type="number" name="angka">
<input type="submit">
</body>
</html>

<?php


$nilai = $_GET["angka"];

if ($nilai < 30) {
  echo "Kurang";
} elseif ($nilai < 50) {
  echo "Lumayan";
} elseif ($nilai < 75) {
  echo "Ya boleh lah";
} elseif ($nilai < 100) {
  echo "mantapp";
} else {
  echo "diluar nalar coy";
}

// 0-30 = Kurang
// 31-50 = Lumayan
// 51-75 = ya boleh lah
// 76-100 = mantapp
// 100 ++ = diluar nalar coy
?>
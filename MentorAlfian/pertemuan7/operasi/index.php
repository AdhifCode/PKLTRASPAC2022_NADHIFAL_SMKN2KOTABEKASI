<?php

require_once 'operasi/Kalkulator.php';

$coba = new Kalkulator;

$coba->setOperasi(new Tambah);
$coba->Kalkulasi(10, 50); //jadinya 10 + 50

$coba->setOperasi(new Kurang);
$coba->Kalkulasi(5); //di kurang
 echo $coba->getHasil();
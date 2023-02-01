<?php
echo "
<div>
<form action='' method='post'>
<input type='text' name='bilangan1'>
<input type='text' name='bilangan2'>
<input type='text' name='bilangan3'>
<input type='text' name='bilangan4'>
<input type='text' name='bilangan5'>
<p><input type='Radio' name='operasi' value='tambah'>+</p>
<p><input type='Radio' name='operasi' value='kurang'>-</p>
<p><input type='Radio' name='operasi' value='bagi'>/</p>
<p><input type='Radio' name='operasi' value='kali'>x</p>
<p><input type='Radio' name='operasi' value='modulo'>%</p>
<input type='submit' name='submit' value='Submit'>
</form>	
</div>
";
 
include "kalkulator html/kalkulator.php";
 
$kalkulator = new Kalkulator;
 
 if(isset($_POST['submit'])){
	$kalkulator->setOperasi($_POST['bilangan1'],$_POST['bilangan2'],$_POST['bilangan3'],$_POST['bilangan4'],$_POST['bilangan5'],$_POST['operasi']);
	echo $kalkulator->getOperasi();
 }
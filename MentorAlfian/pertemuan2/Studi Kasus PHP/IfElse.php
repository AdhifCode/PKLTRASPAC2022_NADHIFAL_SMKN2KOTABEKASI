<?php 
function phpifelse(){
	$hewan = "kucing";
if($hewan == "kucing"){
	echo "Dia adalah hewan lucu";
}
 elseif ($hewan = "ayam") {
	echo "Dia adalah ayam";


}else{
	echo "Saya tidak suka";
}
}

?>

<!-- variabel hewan adalah “kucing”. dan kemudian dengan kondisi if else kita memeriksa
 variabel hewan. cara pemahamannya begini “Jika variabel hewan sama dengan kucing maka
  tampilkan dia adalah Dia adalah hewan lucu, jika tidak tampilkan Saya tidak suka” -->
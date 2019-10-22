<?php
/*pewarisan.php*/
class Bapak{
	var $nama="Bapak";
function Bapak($n){
	$this->nama=$n;
}
function Hallo(){
	echo	"Hallo,Saya "," $this->nama<br>";
}
}
class Anak extends Bapak{
}
$test = new Anak("Anak Dari Bapak");
$test->Hallo();
?>
<?php
/*pewarisan.php*/
class Bapak{
var $nama="Bapak";
function Bapak($n){
$this->nama=$n;
$this->name=$n;
}

function Hallo(){
echo "========================CONTOH POLIMORPHISM=======================<br>";
echo "Halo,Saya Anita Putri "," $this->nama<br>";
echo "Halo,Saya Afrendo Anak ke-2 ","$this->name<br>";
}
}
class Anak extends Bapak{
}
$test = new Anak("dari Bapak Joko");
$test->Hallo();
?>
<?php
/*Polymorphism*/
class Kendaraan{
	private $merk;
	private $harga;
	private $negara;
	private $tipe;
	
function __construct ($merk,$harga,$negara,$tipe){
	$this->merk=$merk;
	$this->harga=$harga;
	$this->negara=$negara;
	$this->tipe=$tipe;
}
function BacaMerk(){
	return $this->merk;
}
function BacaHarga(){
	return $this->harga;
}
function BacaNegara(){
	return $this->negara;
}
function BacaTipe(){
	return $this->tipe;
}
}
echo "=============================================================<br>";
echo " 				TUGAS POLIMORPHISM							   <br>";
echo "=============================================================<br><br>";

$mobil = new Kendaraan("Avanza",1000000000,"Jepang","Sport");
	echo "Merek Kendaraan = ".$mobil->BacaMerk()."<br>";
	echo "Harga Kendaraan = ".$mobil->BacaHarga()."<br>";
	echo "Negara Asal	  = ".$mobil->BacaNegara()."<br>";
	echo "Tipenya		  = ".$mobil->BacaTipe()."<br>";
echo "===============================================================<br><br>";
$mobil1 = new Kendaraan("Innova",1500000000,"Jepang","Mewah");
	echo "Merek Kendaraan = ".$mobil1->BacaMerk()."<br>";
	echo "Harga Kendaraan = ".$mobil1->BacaHarga()."<br>";
	echo "Negara Asal	  = ".$mobil1->BacaNegara()."<br>";
	echo "Tipenya		  = ".$mobil1->BacaTipe()."<br>";
echo "===============================================================<br><br>";
$mobil2 = new Kendaraan("Ferrari","10 Milyar","Italia","Sultan");
	echo "Merek Kendaraan = ".$mobil2->BacaMerk()."<br>";
	echo "Harga Kendaraan = ".$mobil2->BacaHarga()."<br>";
	echo "Negara Asal	  = ".$mobil2->BacaNegara()."<br>";
	echo "Tipenya		  = ".$mobil2->BacaTipe()."<br>";
	
?>
<?php
include_once "person.php";


$joko = new Person("joko", "jalan lenteng agung", "depok");
// $joko->nama = "joko";
// $joko->alamat = "jalan Lenteng agung";
// $joko->kota = "depok";

echo $joko->nama;
echo "<br>";
echo $joko->alamat;
echo "<br>";
echo $joko->kota;
echo "<br>";
$joko->say();


?>
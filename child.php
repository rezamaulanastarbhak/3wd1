<?php
include_once "person.php";
use admin\Person as admin;

class Faculty extends admin {
var $nip;
function __construct($nama, $alamat, $kota , $nip)
{
    parent::__construct($nama, $alamat, $kota);
    $this->nip = $nip;
}

}

class Student extends admin {
var $nis;

    function __construct($nama, $alamat, $kota, $nis ) {
        parent::__construct($nama, $alamat, $kota);
        $this->nis = $nis;
    
    }

    public function say(){
        echo "hallo nama saya {$this->nama} <br>";
    }

    public function teriak(){
        echo "hallooooooo, nama saya {$this->nama} <br>";
    }

    public function getTeriakParent(){
        parent::teriak();
    }

}

$andi = new admin("andi", "UI", "depok");
$andi->say();

$fikri = new Student("Fikri", "jalan dua", "depok", "1000001");

echo $fikri->nis;
echo "<br>";
echo $fikri->nama;
echo "<br>";
echo $fikri->alamat;
echo "<br>";
echo $fikri->kota;
echo "<br>";
echo "<br>";
$fikri->say();
$fikri->teriak();

$tom = new Faculty("Tom", "UI", "Depok", "2007110");

echo $tom->nama;
echo "<br>";
echo $tom->nip;

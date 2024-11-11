<?php
namespace admin;
class Person{
    // properti
   public $nama;
   public $alamat;
   public $kota; 

//    method atau function
    public function __construct($nama, $alamat, $kota){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->kota = $kota;
    }
    public function say(){
        echo "hello <br>";
    }

    public function teriak(){
        echo "Halloooo, ";
    }

    function set_nama($nama){
        $this->nama = $nama;
    }
    function get_nama(){
        return $this->nama;
    }
}

namespace user;
class Person {

}




?>
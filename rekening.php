<?php

class Rekening{
    var $norek;
    var $saldo;

    function __construct($norek, $saldo = 0)
    {
        $this->norek = $norek;
        $this->saldo = $saldo;
    }

    function nabung($uang){
        $this->saldo += $uang;
        echo "dana setelah di tabung {$this->saldo} <br>";
    }

    function tarik($uang){
        $this->saldo -= $uang;
        echo "dana setelah di tarik {$this->saldo} <br>";
    }

    function cekSaldo(){
        echo "saldo saat ini adalah : {$this->saldo} <br>";
    }
}

class RekeningTabungan extends Rekening {
    var $potongan;

    function __construct($norek, $saldo = 0, $potongan){
        parent::__construct($norek, $saldo);
        $this->potongan = $potongan;
    }

    function potonganBulanan(){
        $this->saldo -= $this->potongan;
        echo "saldo setelah di potong {$this->saldo} <br>";
    }
}


class RekeningDeposito extends Rekening{
    var $bunga;

    function __construct( $norek, $saldo = 0, $bunga){
        parent::__construct($norek, $saldo);
        $this->bunga = $bunga;
    }

    function tambahBunga(){
        $this->saldo = $this->saldo + (($this->bunga/100)*$this->saldo);
        echo "saldo setelah di tambah bunga {$this->saldo} <br>";
    }
}

$andi = new RekeningTabungan("10001", 500000, 5000);
$andi->cekSaldo();
$andi->nabung(200000);
$andi->tarik(50000);
$andi->potonganBulanan();
$andi->cekSaldo();
<?php
require_once "kendaraan.php";
class mobil extends Kendaraan
{
    private $jumlahPintu;
    public function __construct($merk, $warna, $jumlahPintu)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        //atau bgini
        // parent::__construct($merk,$warna); //sama dgn this d atas mksudny
        $this->jumlahPintu = $jumlahPintu;
    }
    public function getJmlPintu()
    {
        return $this->jumlahPintu;
    }
}

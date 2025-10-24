<?php
require_once "kendaraan.php";
class motor extends Kendaraan
{
    private $jenisMotor;
    public function __construct($merk, $warna, $jenisMotor)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        //atau bgini
        // parent::__construct($merk,$warna); //sama dgn this d atas mksudny
        $this->jenisMotor = $jenisMotor;
    }
    public function getJenisMotor()
    {
        return $this->jenisMotor;
    }
}

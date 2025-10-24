<?php
class kendaraan
{
    protected $warna, $merk;

    public function __construct($warna, $merk)
    {
        $this->warna = $warna;
        $this->merk = $merk;
    }
    public function getMerk()
    {
        return $this->merk;
    }
    public function getWarna()
    {
        return $this->warna;
    }
}

<?php
class Mahasiswa_1
{
    public $nama;
    public $umur;


    public function __construct($nama, $usia)
    {
        $this->nama = $nama;
        $this->umur = $usia;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getUmur()
    {
        return $this->umur;
    }
}

$mhs1 = new Mahasiswa('wilda', 23);

// Output
echo $mhs1->getNama();
echo "<br>";
echo $mhs1->getUmur();

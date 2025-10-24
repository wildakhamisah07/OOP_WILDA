<?php
class Mahasiswa
{
    public $nama;
    public $umur;

    public function setNama($name)
    {
        $this->nama = $name;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setUmur($usia)
    {
        $this->umur = $usia;
    }
    public function getUmur()
    {
        return $this->umur;
    }
}
$mhs1 = new Mahasiswa();
$mhs1->setNama('wilda');
$mhs1->setUmur(23);
echo $mhs1->getNama();
echo "<br>";
echo $mhs1->getUmur();

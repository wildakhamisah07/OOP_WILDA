<?php
class Pegawai
{
    public $nama = "Nama Pegawai: Wilda Khamisah";
}
class Manajer extends Pegawai
{
    public $departemen = "Depaertemen: IT (FullStuck Development)";
    public function tampilkanData()
    {
        echo $this->nama . "<br>";
        echo $this->departemen . "<br>";
    }
}
$pegawai = new Manajer();
$pegawai->tampilkanData();

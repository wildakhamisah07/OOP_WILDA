<?php
class Dosen
{
    public $nama;
    public $alamat;
    public $matkul;
}

class Matakuliah
{
    public $name;
}

$nama_matkul_obj = new Matakuliah();
$nama_matkul_obj->name = "Mata kuliah :Mobile Programming";
$dosen = new Dosen();
echo $dosen->nama = "Nama Dosen: Dr.Hj Wilda Khamisah S.Kom,M.Kom";
echo "<br>";
echo $dosen->matkul = $nama_matkul_obj->name;
echo "<br>";
echo $dosen->matkul = "Nama Matkul: Kalkulus";
echo "<br>";

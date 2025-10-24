<?php
class Mahasiswa
{
    public $nama, $nim, $jurusan;
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}
$mhs = new Mahasiswa("Wilda Khamisah", "21101152630382", "Web Programming");
echo $mhs->nama = "Wilda Khamisah";
echo "<br>";
echo $mhs->nim = 21101152630382;
echo "<br>";
echo $mhs->jurusan = "Web Programming";
echo "<br>";

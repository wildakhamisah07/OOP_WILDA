<?php
class Hewan
{
    public $nama, $jenis;
}
// OBJECT DAN DATA KE-1
$hwn = new Hewan();
echo $hwn->nama = "Singa";
echo "<br>";
echo $hwn->jenis = "Mamalia";
echo "<br>";
$animals[] = $hwn;

$hwn2 = new Hewan();
$hwn2->nama = "katak";
$hwn2->jenis = "Amfibi";
$animals[] = $hwn2;

foreach ($animals as $animal) {
    echo "Nama Hewan: {$animal->nama}" . "<br>" . "Jenis Hewan : {$animal->jenis}" . "<br><br>";
}

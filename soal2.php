
<?php
class Lingkaran
{
    public $jari2, $phi;
    public function perkalian()
    {
        return $this->jari2 * $this->jari2 * $this->phi;
    }
}
$lkr = new Lingkaran();
echo $lkr->jari2 = 7;
echo "<br>";
echo $lkr->phi = 3.14;
echo "<br>";
echo "Luas Lingkaran adalah: " . $lkr->jari2 * $lkr->jari2 * $lkr->phi;
echo "<br>";

?>
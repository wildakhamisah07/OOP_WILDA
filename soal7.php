<?php
class Laptop
{
    private $merk;

    public function setMerk($merkBaru)
    {
        $this->merk = $merkBaru;
    }

    public function getMerk()
    {
        return $this->merk;
    }
}
$laptop_baru_wilda = new Laptop();

$laptop_baru_wilda->setMerk("ASUS ROG");

echo "Merk laptop: " . $laptop_baru_wilda->getMerk();

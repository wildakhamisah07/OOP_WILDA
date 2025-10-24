<?php
class Produk
{
    public $nama;
    protected $harga;
    private $stock;

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }
    public function getStock()
    {
        return $this->stock;
    }
}
class Elektronik extends Produk
{
    public function cetak()
    {
        echo $this->nama . "<br>";
        echo $this->getStock() . "<br>";
        echo $this->getHarga() . "<br>";
    }
}
$produk = new Elektronik();

$produk->nama = "Laptop";
$produk->setHarga(3000000);
$produk->setStock(10);
$produk->cetak();

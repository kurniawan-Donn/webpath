<?php

class buah
{
    public $nama;
    protected $warna;
    private $berat;

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    function getInfo()
    {
        return "nama :{$this->nama}, warna :{$this->warna}, Berat: {$this->berat} gram";
    }
}

$mango = new buah();
$mango->nama = ('Mango');
$mango->setBerat(80);
$mango->setWarna("Yellow");

echo $mango->getInfo();

?>
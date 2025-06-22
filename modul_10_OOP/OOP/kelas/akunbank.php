<?php

class akunBank
{
    protected $accountNumber;
    protected $jmUang;
    protected $nama;

    public function __construct($nomorAkun, $nominal, $namaNasabah)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmUang = $nominal;
        $this->nama = $namaNasabah;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($namaNasabah)
    {
        $this->nama = $namaNasabah;
    }

    public function tambahUang($jumlah)
    {
        $this->jmUang += $jumlah;
    }

    public function kurangiUang($jumlah)
    {
        if ($this->jmUang >= $jumlah) {
            $this->jmUang -= $jumlah;
        } else {
            echo "Saldo tidak mencukupi untuk penarikan sebesar {$jumlah}.<br>";
        }
    }

    public function tampilJumlahUang()
    {
        return $this->jmUang;
    }

    public function hitungPajak()
    {
        return $this->jmUang * 0.11;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
}

?>
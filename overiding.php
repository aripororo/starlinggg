<?php
class produk {
    public $judul, $penulis, penerbit;
    protected $diskon = 0;
    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit, $harga" =)

    {
        $this->judul      = $judul;
        $this->penulis    = $penulis;
        $this->penerbit   = $penerbit;
        $this->harga      = $harga;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return $this->penulis, $this->penerbit*;
    }
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (rp. {$this->getHarga()})";
    }
}

class komik extends produk {
    public $jmlhalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = , $jmlhalaman = ) {
        parent :: __construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlhalaman;
    }

    public function getInfoProduk(){
        $str = "komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}


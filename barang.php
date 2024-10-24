<?php
class barang {

public $idBarang ;
public $namaBarang ;
public $hargaBarang ;
public $stok ;
public $kategoriBarang ;

public function __construct($idBarang = '', $namaBarang = '', $hargaBarang = 0, $stok = 0, $kategoriBarang = 0) {
    $this->idBarang = $idBarang;
    $this->namaBarang = $namaBarang;
    $this->hargaBarang = $hargaBarang;
    $this->stok = $stok;
    $this->kategoriBarang = $kategoriBarang;
}

public function TampilkanInfo(){
    echo "idBarang:$this->idbarang, namaBarang:$this->namaBarang,hargaBarang:$this->hargaBarang, stok:$this->stok,kategoriBarang:$this->kategoriBarang";
}
}
// Inisialisasi array untuk menyimpan data barang
$listBarang = [];

// Menyimpan stok akhir
$Stokakhir = 0;
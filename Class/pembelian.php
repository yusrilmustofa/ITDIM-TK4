<?php
class Pembelian {
    public $IdPembelian;
    public $JumlahPembelian;
    public $HargaBeli;
    public $IdPengguna;

    public function __construct($IdPembelian, $JumlahPembelian, $HargaBeli, $IdPengguna) {
        $this->IdPembelian = $IdPembelian;
        $this->JumlahPembelian = $JumlahPembelian;
        $this->HargaBeli = $HargaBeli;
        $this->IdPengguna = $IdPengguna;
    }

    public function getIdPembelian() {
        return $this->IdPembelian;
    }

    public function getJumlahPembelian() {
        return $this->JumlahPembelian;
    }

    public function getHargaBeli() {
        return $this->HargaBeli;
    }

    public function getIdPengguna() {
        return $this->IdPengguna;
    }
}
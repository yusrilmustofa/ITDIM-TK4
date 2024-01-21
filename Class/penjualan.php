<?php
class Penjualan {
    public $IdPenjualan;
    public $JumlahPenjualan;
    public $HargaJual;
    public $IdPengguna;

    public function __construct($IdPenjualan, $JumlahPenjualan, $HargaJual, $IdPengguna) {
        $this->IdPenjualan = $IdPenjualan;
        $this->JumlahPenjualan = $JumlahPenjualan;
        $this->HargaJual = $HargaJual;
        $this->IdPengguna = $IdPengguna;
    }

    public function getIdPenjualan() {
        return $this->IdPenjualan;
    }

    public function getJumlahPenjualan() {
        return $this->JumlahPenjualan;
    }

    public function getHargaJual() {
        return $this->HargaJual;
    }

    public function getIdPengguna() {
        return $this->IdPengguna;
    }
}
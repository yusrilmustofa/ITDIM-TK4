<?php
class Barang {
    public $IdBarang;
    public $NamaBarang;
    public $Keterangan;
    public $Satuan;
    public $IdPengguna;

    public function __construct($IdBarang, $NamaBarang, $Keterangan, $Satuan, $IdPengguna) {
        $this->IdBarang = $IdBarang;
        $this->NamaBarang = $NamaBarang;
        $this->Keterangan = $Keterangan;
        $this->Satuan = $Satuan;
        $this->IdPengguna = $IdPengguna;
    }

    public function getIdBarang() {
        return $this->IdBarang;
    }

    public function getNamaBarang() {
        return $this->NamaBarang;
    }

    public function getKeterangan() {
        return $this->Keterangan;
    }

    public function getSatuan() {
        return $this->Satuan;
    }

    public function getIdPengguna() {
        return $this->IdPengguna;
    }
}
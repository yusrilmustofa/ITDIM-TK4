<?php
class Pelanggan {
    private $idPelanggan;
    private $namaPelanggan;
    private $alamat;
    private $noHp;
    private $email;
    private $idBarang;

    public function __construct($idPelanggan, $namaPelanggan, $alamat, $noHp, $email, $idBarang) {
        $this->idPelanggan = $idPelanggan;
        $this->namaPelanggan = $namaPelanggan;
        $this->alamat = $alamat;
        $this->noHp = $noHp;
        $this->email = $email;
        $this->idBarang = $idBarang;
    }

    public function getIdPelanggan() {
        return $this->idPelanggan;
    }

    public function getNamaPelanggan() {
        return $this->namaPelanggan;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    public function getNoHp() {
        return $this->noHp;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getIdBarang() {
        return $this->idBarang;
    }
}
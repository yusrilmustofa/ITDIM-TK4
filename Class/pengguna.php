<?php
class Pengguna {
    public $idpengguna;
    public $nama_pengguna;
    public $password;
    public $NamDepan;
    public $NamaBelakang;
    public $NoHp;
    public $Alamat;
    public $IdAkses;

    public function __construct($idpengguna, $nama_pengguna, $password, $NamDepan, $NamaBelakang, $NoHp, $Alamat, $IdAkses) {
        $this->idpengguna = $idpengguna;
        $this->nama_pengguna = $nama_pengguna;
        $this->password = $password;
        $this->NamDepan = $NamDepan;
        $this->NamaBelakang = $NamaBelakang;
        $this->NoHp = $NoHp;
        $this->Alamat = $Alamat;
        $this->IdAkses = $IdAkses;
    }

    public function getIdPengguna() {
        return $this->idpengguna;
    }

    public function getNamaPengguna() {
        return $this->nama_pengguna;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getNamDepan() {
        return $this->NamDepan;
    }

    public function getNamaBelakang() {
        return $this->NamaBelakang;
    }

    public function getNoHp() {
        return $this->NoHp;
    }

    public function getAlamat() {
        return $this->Alamat;
    }

    public function getIdAkses() {
        return $this->IdAkses;
    }
}
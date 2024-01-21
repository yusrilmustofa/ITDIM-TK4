<?php
class HakAkses {
    public $IdAkses;
    public $NamaAkses;
    public $Keterangan;

    public function __construct($IdAkses, $NamaAkses, $Keterangan) {
        $this->IdAkses = $IdAkses;
        $this->NamaAkses = $NamaAkses;
        $this->Keterangan = $Keterangan;
    }

    public function getIdAkses() {
        return $this->IdAkses;
    }

    public function getNamaAkses() {
        return $this->NamaAkses;
    }

    public function getKeterangan() {
        return $this->Keterangan;
    }
}

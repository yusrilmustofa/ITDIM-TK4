<?php
class Supplier {
    public $IdSuplier;
    public $NamaSuplier;
    public $Alamat;
    public $NoHp;
    public $ProdukSupplier;
    public $IdBarang;

    public function __construct($IdSuplier, $NamaSuplier, $Alamat, $NoHp, $ProdukSupplier, $IdBarang) {
        $this->IdSuplier = $IdSuplier;
        $this->NamaSuplier = $NamaSuplier;
        $this->Alamat = $Alamat;
        $this->NoHp = $NoHp;
        $this->ProdukSupplier = $ProdukSupplier;
        $this->IdBarang = $IdBarang;
    }

    public function getIdSuplier() {
        return $this->IdSuplier;
    }

    public function getNamaSuplier() {
        return $this->NamaSuplier;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    public function getNoHp() {
        return $this->noHp;
    }

    public function getProdukSupplier() {
        return $this->produkSupplier;
    }

    public function getIdBarang() {
        return $this->idBarang;
    }

}



<?php
class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function tampilkanInfo() {
        return "Produk: $this->nama \n Harga: $this->harga \n Stok: $this->stok";
    }
    
    public function beliProduk($jumlah){
        
    }

}
?>
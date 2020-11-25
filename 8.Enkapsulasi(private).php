<?php

//class hewan 
class hewan{
    //menentukan property dengan private
    private $nama = "kucing";
    
    //method public
    public function tampilkan_nama() {
        return "Nama saya " .$this->nama;
    }
    
    
}
//instansiasi class hewan
$hewan = new hewan();

//memanggil method public tampilkan_nama dari class hewan
echo $hewan->tampilkan_nama();
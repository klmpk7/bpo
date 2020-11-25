<?php

//class hewan
class hewan{
    //prop
    public $nama;
    public $warna;
    
  //method hewan
    function tampilkan_nama (){
        return "nama saya kucing <br/>";
    }    
    
}  
//instantiansi class hewan
$manusia = new hewan();

//memanggil method tampilkan nama dari class hewan
echo $manusia->tampilkan_nama();
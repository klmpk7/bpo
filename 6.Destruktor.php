<?php
 
//class hewan
class hewan{
    //property
    var $nama;
    var $warna;
    
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }
    
    //method hewan
    function tampilkan_nama(){
        return "Nama saya kucing <br/>";
    }
    
}
//instansiasi class hewan
$hewan = new hewan();
 
//memanggil method tampilkan_nama dari class manusia
echo $hewan->tampilkan_nama();
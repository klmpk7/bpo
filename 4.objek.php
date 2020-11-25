<?php
//PHP OOP Part 2 Pengertian Class, Object, Property  dan Method
//Class hewan
class hewan{
  //property
  var $nama; 
  var $warna; 
  
  //method hewan
  function tampilkan_nama(){
    return "Nama saya kucing <br/>";
  }
  
  function warna_kulit(){
    return "Warna bulu saya oren <br/>";
  } 
  

}
//instansiasi class hewan
$hewan = new hewan();

//memanggil method tampilkan_nama dari class manusia
echo $hewan->tampilkan_nama();

//memanggil method warna kulit dari class manusia
echo $hewan->warna_kulit();
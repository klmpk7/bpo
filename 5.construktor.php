<?php

//class hewan
class hewan{
  //property
  var $nama; 
  var $warna; 
  
  function ___construct (){
  echo "ini adalah isi method construct<br/>";
  }
  
  //method hewan
  function tampilkan_nama(){
    return "Nama saya kucing<br/>";
  }
  
}
//instansiasi class hewan
$hewan = new hewan();

//memanggil method tampilkan_nama dari class hewan
echo $hewan->tampilkan_nama();
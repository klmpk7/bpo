
<?php
class hewan{
  
   protected $nama = "kucing";

  
  protected function nama(){
     return " Nama saya " .$this->nama;
  }
      
  public function tampilkan_nama(){
      return $this->nama;
  }

      
}


$hewan = new hewan();

echo $hewan->tampilkan_nama();

?>
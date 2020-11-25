
<?php
   
 class manusia {
   
   
   public $nama_saya;
   
   
   function berinama($saya) {
      $this->nama_saya=$saya;
   }

}

// class turunan atau sub class dari kelas manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{

    // property class teman
    public $nama_teman;
     
    // method pada class teman
    function berinamateman ($teman) {
       $this->nama_teman=$teman;
    }
 }
 
 // instalasi class teman 
 $malasngoding = new teman;
 //method beri nama adalah method pada class manusia,
 $malasngoding->berinama(" kucing");
 $malasngoding->berinamateman(" black "); 
 
 // menampilkan isi property
echo "class hewan:" . $malasngoding->nama_saya . "<br/>";
echo "warna :" . $malasngoding->nama_teman;
 
 ?>
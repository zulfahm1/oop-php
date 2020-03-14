 <?php

class Sekolah {
  

  function __construct($murid, $kelas) {
    
    $this->murid =  $murid;
    $this->kelas = $kelas;  
  }
  
  function get_murid() {
    return $this->murid;
  }
  
  function get_kelas() {
    return $this->kelas;
  }

}

$kepsek = new Sekolah("banyak", "sedikit");
echo $kepsek->get_murid();
echo "<br>";
echo $kepsek->get_kelas();

?> 
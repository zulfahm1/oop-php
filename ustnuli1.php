 <?php

class Kendaraan {
  public $type,
         $warna,
         $harga;

  function __construct($type, $warna ,$harga) {

    $this->type =  $type;
    $this->warna = $warna;
    $this->harga = $harga;
  }

  function get_type() {
    return $this->type;
  }
  
  function get_warna() {
    return $this->warna;
  }
  
  function get_harga() {
    return $this->harga;
  }

}

$bmw = new Kendaraan("besar", "silver", 874397 );
echo $bmw->get_type();
echo "<br>";
echo $bmw->get_warna();
echo "<br>";
echo $bmw->get_harga();
?> 
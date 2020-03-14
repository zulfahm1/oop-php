<?php 

class Elektronik {
 
  function __construct($merek,$asal) {
    $this->merek = $merek;
    $this->asal = $asal;
  }

  function get_merek(){
    return $this->merek;
  }
  function get_asal(){
    return $this->asal;
  }
}

$corona = new Elektronik("somay","wuhan");
echo $corona->get_merek();
echo "<br>";
echo $corona->get_asal();

?>
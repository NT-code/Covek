<?php
class Covek{
	      private $ime;
        private $prezime;
	      $brGodina;
	
  function __construct($ime, $prezime){
	  $this -> ime = $ime;
	  $this -> prezime = $prezime;
  }
	
  function getIme(){
	  return $this->ime;
  }
	
  function getPrezime(){
	  return $this->prezime;
  }
	
  function getBrGodina(){
	  return $this->brGodina;
  }
	
  function isUnderage(){
	  if ($brGodina >= 18){
		  echo "Lice je punoletno.";
	  }
	  else{
		  echo "Lice je maloletno, ne moze stupiti u radni odnos.";
	  }
  }
 
}
?>

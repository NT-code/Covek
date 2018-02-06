<?php
class Covek{
	
	private $ime;
      	private $prezime;
	private $brGodina;
	private $strucnaSprema;
	private $zaposlen;
	
  	public function __construct(string $ime, string $prezime, int $brGodina, string $strucnaSprema){
		$this -> ime = $ime;
	  	$this -> prezime = $prezime;
		$this -> brGodina = $brGodina;
		$this -> strucnaSprema = $strucnaSprema;
		$this -> zaposlen = true;
  	}
	
  	public function getIme(): string{
	  	return $this->ime;
  	}
	
	public function setIme(string $ime): void{
       	 	$this->ime = $ime;
    	}
	
  	public function getPrezime(): string{
	  	return $this->prezime;
  	}
	public function setPrezime(string $prezime): void{
       	 	$this->prezime = $prezime;
    	}
	
  	public function getBrGodina(): int{
	  	return $this->brGodina;
  	}
    	public function setBrGodina(int $brGodina): void{
        	$this->brGodina = $brGodina;
    	}
	
	public function getStrucnaSprema(): string{
	  	return $this->strucnaSprema;
  	}
	public function setStrucnaSprema(string $strucnaSprema): void{
       	 	$this->strucnaSprema = $strucnaSprema;
    	}
	
	public function jeZaposlen(): bool {
       	 	return $this->zaposlen;
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

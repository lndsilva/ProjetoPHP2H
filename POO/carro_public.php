<?php 

	class carro_public{
		public $_modelo;

		public function setModelo($_m){
			$this->_modelo = $_m;
		}		
	}
 ?>
 
 <?php 
 	$_carro = new carro_public();
 	$_carro->setModelo("Ford");
 	$_carro->_modelo = "Chevrolet";

 	

  ?>
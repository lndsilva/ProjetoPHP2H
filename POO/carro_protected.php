<?php 
	
	class carro_protected{
		protected $_modelo;

		public function setModelo($_m){
			$this->_modelo = $_m;
		}
	}

	class caminhao extends carro_protected{

		protected $_eixos;

		public function setModelo($_m){
			parent::_modelo = $_m;
		}

		public function setEixo($_ne){
			$this->_eixos = $_ne;
		}
	}
?>
 <?php 

 	$_carro = new carro_protected();
 	
 	$_carro->setModelo("Ford");
 	$_carro->_modelo = "Chevrolet";

 	$_caminhao = new caminhao();
 	$_caminhao->setModelo("Scania");
 	$_caminhao->setEixo(8);


  ?>
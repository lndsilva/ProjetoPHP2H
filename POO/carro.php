<?php 
	//criando a classe PHP
	class carro{
		//criando os atributos globais
		private $_marca;
		private $_modelo;
		private $_cor;
		private $_ano;

		//funções setters e getters

		public function setMarca($_m){
			$this->_marca = $_m;
		}
		public function setModelo($_m){
			$this->_modelo = $_m;
		}
		public function setCor($_c){
			$this->_cor = $_c;
		}
		public function setAno($_a){
			if (is_int($_a)) {
				$this->_ano = $_a;
			}
			else{
				return FALSE;
			}
			
		}

		public function getMarca(){
			return $this->_marca;
		}
		public function getModelo(){
			return $this->_modelo;
		}
		public function getCor(){
			return $this->_cor;
		}
		public function getAno(){
			return $this->_ano;
		}

		public function getCarro(){
			return "Marca: " . $this->getMarca() . "<br />" .
				   "Modelo: " . $this->getModelo() . "<br />" .
				   "Cor: " . $this->getCor() . "<br />" .
				   "Ano: " . $this->getAno();
		}

	}

?>

<?php 
	$_carro = new carro();

	$_carro->setMarca("Ford");
	$_carro->setModelo("Fiesta");
	$_carro->setCor("Vermelho");
	$_carro->setAno(2010);

	echo "Marca do carro: " . $_carro->getMarca();
	echo "<br />";
	echo $_carro->getCarro();
	$_carro->setModelo("KA");
	echo "<br />";
	echo "Nova marca do carro: " . $_carro->getMarca();
?>
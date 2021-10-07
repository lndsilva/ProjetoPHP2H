<?php 

	class fruta{

		public $_nome;
		public $_cor;

		function __construct($_n, $_c){
			$this->_nome = $_n;
			$this->_cor = $_c;
		}

		function getNome(){
			return $this->_nome;
		}
		function getCor(){
			return $this->_cor;
		}

		function __destruct(){
			echo "O nome da fruta é {$this->_nome} e a cor é {$this->_cor}";
		}

	}

	$_fruta = new fruta("Maça","Verde");

	




 ?>
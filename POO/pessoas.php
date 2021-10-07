<?php 

	class pessoas{

		private $_tipo;
		protected $_nome;
		protected $_endereco;
		protected $_telefone;

		protected function setTipo($_t){
			$this->_tipo = $_t;
		}
	}

	class estudante extends pessoas{

		protected $_curso;

		function __CONSTRUTOR(){
			parent::setTipo("E");
		}
	}

	$e = new estudante();
	$e->_tipo = "A";

 ?>
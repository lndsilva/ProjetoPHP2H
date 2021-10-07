<?php 
	//criando a classe
	class funcionario{
		//declarando as variáveis globais/atributos
		public $_codigo;
		public $_nome;
		public $_salario;
		public $_departamento;

		//...

		function getSalario(){
			return $this->_salario;
		}

		function setSalario($_nsal){
			$this -> _salario = $_nsal;
		}
	}
 ?>
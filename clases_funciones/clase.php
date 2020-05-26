<?php
	class Alexander()
	{
		public $ci;
		public $pais;
		public $sexo;
		public $edad;

		function _construct($ci,$pais,$sexo,$edad)
		{
			$this->ci=$ci;
			$this->pais=$pais;
			$this->sexo=$sexo;
			$this->edad=$edad;
		}
	}
?>
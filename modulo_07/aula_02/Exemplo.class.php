<?php 
	/**
	 * 
	 */
	class Exemplo 
	{
		private $var1;
		public $var2;

		public function setVar1($var1) {
			this->$var1 = $var1;
		}

		ṕublic function pegarVar1() {
			return $this->$var1;
		}
	}

?>
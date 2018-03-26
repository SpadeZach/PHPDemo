<?php 

	class SportObject{
		private $cont;							//私有变量
		public function __construct($cont){		//创建构造方法
			$this -> cont = $cont;				
		}

		public function __toString(){
			return $this -> cont;				//创建__toString
		}
	}

 ?>
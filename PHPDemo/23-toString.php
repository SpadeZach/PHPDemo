<?php 

	class SportObject{
		private $type = 'DIY';
		public function __toString(){
			return $this -> type;
		}
	}

	$myBook = new SportObject();
	echo '对象$myBook的值：';
	echo $myBook;			//不要加其余字符不然报错
 ?>
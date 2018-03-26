<?php 

	class SportObject{
		private $type = '';			//私有变量
		public function __get($name){
			if (isset($this->name)) {				//判断是否被声明
				# code...
				echo '变量'.$name.'的值为:'.$this->$name.'<br>';
			}else{
				echo '变量'.$name.'未定义初始化值为0<br>';
				$this->name = 0;			
			}
		}

		public function __set($name,$value){
			if (isset($this->$name)) {
				# code...
				$this -> $name = $value;
				echo '变量'.$name.'赋值为：'.$value.'<br>';
			}else{
				$this -> $name = $value;
				echo '变量'.$name.'被初始化为：'.$value.'<br>';
			}
		}
	}
	$MyComputer = new SportObject();
	$MyComputer -> type = 'DIY';
	$MyComputer -> type;
	$MyComputer -> name;


 ?>
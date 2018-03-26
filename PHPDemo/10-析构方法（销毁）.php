<?php 

	class SportObject{	//定义一个运动类
		public $name;		//定义成员变量
		public $height;
		public $age;
		public function __construct($name,$height,$age){
			$this->name=$name;
			$this->height=$height;
			$this->age=$age;
			
		}
		public function bootFootBall(){
			if ($this->height < 180 and $this->age < 20) {
				return $this->name."符合踢球条件";
			}else{
				return $this->name."不符合条件";
			}
		}
		function __destruct(){
		echo "<p><b>对象被销毁，调用析构方法。<b><p>";
		}
	}
	
	$sport = new SportObject('明日','185','18');				//实例化

 ?>
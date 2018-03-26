<?php 

	//父类
	class SportObject{	
		public $name;
		public $height;
		public $age;
		public function __construct($name,$height,$age){
			$this->name=$name;
			$this->height=$height;
			$this->age=$age;
			
		}

		function showMe(){
			echo "这句话不会显示";
		}
	}
	class BeatBasketBall extends SportObject{	
		public $avoirdupois;
		public function __construct($name,$avoirdupois){
			$this->name=$name;
			$this->avoirdupois=$avoirdupois;
		}

		function showMe(){
			if ($this->avoirdupois<20) {
				return $this->name."符合打篮球";
			}else{
				return $this->name."不符合打篮球";
			}
		}
	}
	

	class WeightLifting extends SportObject{	
		function showMe(){
			if ($this->height>185) {
				return $this->name."符合举重条件";
			}else{
				return $this->name."不符合举重条件";
			}
		}
	}

	$beatbasketball = new BeatBasketBall('科技','13');
	$weight =  new WeightLifting('明日','185','20');
	echo $beatbasketball->showMe()."<br>";
	echo $weight->showMe()."<br>";
 ?>
<?php 

	//父类
	class C{	
		function __call($name,$num){				//调用不存在的方法名
			echo "方法名称".$name."<p>";				//输出方法名
			echo "参数存在个数".count($num)."<p>";	//输出参数个数
			if (count($num) == 1) {					//根据参数个数不同调用不同的方法
				echo $this->list1($a);
			}
			if (count($num) == 2) {
				echo $this->list2($a,$b);
			}
		}

		public function list1($a){
			return "这是List1函数";
		}
		public function list2($a,$b){
			return "这是list2函数";
		}

	}
	$a = new C;
	$a->listshow(1,2);
 ?>
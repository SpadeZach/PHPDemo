<?php 

	class SportObject{
		public function myDream(){
			echo '调用的方法存在执行<p>';
		}
		public function __call($method, $parameter){
			echo '如果方法不存在则执行__call方法<br>';
			echo '方法名为'.$method.'<br>';
			echo '参数有:';
			var_dump($parameter);
		}
	}
	$exam = new SportObject();
	$exam -> myDream();
	$exam -> mDream('how','what','why');


 ?>
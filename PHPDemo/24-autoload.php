<?php 

	function __autoload($class_name){			//创建__autoload方法
		$class_path = $class_name.'.class.php';	//类文件路径
		if (file_exists($class_path)) {			//判断文件是否存在	
			include_once($class_path);			//动态包含类文件
		}else{
			echo '类路径错误';
		}
	}
	$myBook =  new SportObject("江山代有才认出，各领风骚数百年");
	echo $myBook;

 ?>
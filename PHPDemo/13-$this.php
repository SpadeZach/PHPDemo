<?php 

	//父类
	class example{									//创建类
		function exam(){							//方法名

			if (isset($this)) {						//判断变量$this是否存在
				echo '$this的值为:'.get_class($this);
			}else{
				echo '$this未定义';
			}
			
		}
	}
	$class_name = new example();
	$class_name->exam();							//调用方法
 ?>
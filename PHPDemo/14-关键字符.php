<?php 

	class BOOK{	
		const NAME = 'computer';					//创建类
		function __construct(){		
			echo "示例名字：".BOOK::NAME;
		}					
	}

	class l_book extends BOOK{
		const NAME = 'foreign language';
		function __construct(){	
			parent::__construct();					//调用父类的构造方法
			echo "示例名字：".self::NAME;
		}			
	}

	$a = new l_book();
 ?>
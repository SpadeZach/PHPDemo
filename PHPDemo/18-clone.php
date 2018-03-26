<?php 
	/*******  PHP4  *******/
	class SportObject{
		private $object_type = 'book';	//声明私有变量，并赋值
		public function setType($type){
			$this -> object_type = $type;		//声明方法，为$object_type赋值
		}

		public function getType($type){
			return $this -> object_type;		//声明方法，返回变量$object_type的值
		}

	}

	$book1 = new SportObject();
	$book2 = $book1;							//book2赋值
	$book2 -> setType('computer');				//改变$book2的值
	echo '对象book1的值'.$book1 -> getType();

	/*******  PHP5如果需要复制对象需要clone  *******/
	$object1 = new ClassName();
	$object2 = clone $object1;
 ?>
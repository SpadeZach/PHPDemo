<?php 

	class SportObject{
		private $type = 'DIY';
		public function getType(){

			return $this -> type;
		}	

		public function __sleep(){
			echo '使用serialize()函数将对象保存起来，可以存储到文本文件，数据库等地方<br>';
			return array('type');
		}

		public function __weakup(){
			echo '当需要该数据时，使用unserialize()函数对已序列化的字符串进行操作，将其转换回对象';
		}
	}

	$myBook = new SportObject();
	$i = serialize($myBook);
	echo '序列化后的字符串'.$i.'<br>';
	$rebook = unserialize($i);
	echo '还原后变量'.$rebook -> getType();

 ?>
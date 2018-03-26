<?php 

	class SportObject{
		
	}

	class MyBook extends SportObject
	{
		
		private $type;
	}

	$cBook = new MyBook();
	if ($cBook instanceof MyBook) {
		echo '对象$cbook属于MyBook类<br>';
	}
	if ($cBook instanceof SportObject) {
		echo '对象$cbook属于SportObject类<br>';
	}

 ?>
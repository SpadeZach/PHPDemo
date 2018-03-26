<?php 
	final class SportObject{
		function __construct(){
			echo "init object";
		}
	}

	class Mybook extends SportObject{
		
		static function exam(){
			echo "You can't see me";
		}
	}
	Mybook::exam();
 ?>
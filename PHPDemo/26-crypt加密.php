<?php 

	$str = 'This is an example';
	echo '加密前$str的值为'.$str;
	$crypttostr = crypt($str,'$1'.$str.'$');					//对变量$str加密
	echo '<p>加密后$str的值为:'.$crypttostr;		//输出加密后的变量

 ?>
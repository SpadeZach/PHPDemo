<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$filename = "蜀道难.txt";		//要读取的文件
		$fp = fopen($filename,'rb');	//打开文件
		echo fread($fp,32);				//截取前32个字符
		echo "<p>";
		echo fread($fp,filesize($filename));  //输出其余的文件内容


	 ?>
</body>
</html>
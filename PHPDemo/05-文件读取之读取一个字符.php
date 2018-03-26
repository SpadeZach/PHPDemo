<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<pre>
		<?php 

		$fopen = fopen('锦瑟.txt','rb');				//创建文件资源
		while (false !== ($chr =fgetc($fopen))) {	//使用fgetc()函数去的一个字符，判断是否为false
		 	echo $chr;								//如果不是，输出该字符
		 } 
		 fclose($fopen);							//关闭文件资源
		?>

	</pre>
</body>
</html>
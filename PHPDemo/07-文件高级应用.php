<?php  

	$filename = "锦瑟.txt";			//指定文件
	if (is_file($filename)) {		//判断是否存在
		# code...
		echo "文件总字节数".filesize($filename)."<br>";
		$fopen = fopen($filename,'rb');				//打开文件
		echo "初始化指针位置".ftell($fopen)."<br>";
		fseek($fopen,33);						//移动后指针位置
		echo "使用fseek函数后指针位置".ftell($fopen)."<br>";
		echo "当前指针后内容：".fgets($fopen)."<br>";
		if (feof($fopen)) {						//是否指向文件末尾
			echo "当前指针指向文件末尾：".ftell($fopen)."<br>";
			rewind($fopen);						//使用rewind
			echo "使用rewind函数后指针位置".ftell($fopen)."<br>";
			echo "输出前33个字节内容：".fgets($fopen，33)."<br>";
			fclose($fopen);				
		}else{
			echo "文件不存在";
		}

	}


?>
<?php
//	初识
	echo "这是xml风格"; 
	echo "<p>";
	echo "这样会出错的!!!"//不会看到?>会看到;

	
?>
<?php  
	$boo = true;
	if ($boo == true) {
		// $ 是变量的标识符，无论是声明还是调用都应该使用$
		echo "<p>";
		echo '变量$boo为真！';
	}else{
		echo "假";
	}
?>


<!-- 字符串
	3种定义字符串的方法
	1、''
	2、""
	3、<<<
 -->
<?php 
	echo "<p>";
	$a ='字符串';
	echo "$a"; //双引号输出
	echo "<p>"; //输出段标记
	echo '$a'; //单引号输出
?>

<!-- 字符串 -->
<?php 
	echo "<p>";
	$i = '显示该行内容';
	//结束标识必须单独另起一行，并且不允许有空格，在标识符前后有其他复活也会发生错误
	echo <<<std
	这和双引号没什么区别,\$i同样可以被输出出来。<p>
	\$i的内容为:$i
std;
 ?>

<!-- 整型 -->
<?php 
	$str = 1234567890; //声明一个十进制的整数
	$str2 = 0x1234567890;//声明一个十六进制的整数
	$str3 = 01234567890;//声明一个八进制的整数
	$str4 = 01234567;//声明另一个八进制的整数
	echo '数字1234567890不同的输出结果:<p>';
	echo '十进制是:'.$str.'<br>';
	echo '十六进制是:'.$str2.'<br>';

 ?>

<!-- 浮点型 -->
<?php 
	echo "圆周率的3种书写方法<p>";
	echo "第一种：pi()=".pi().'<p>';
	echo '第二种:3.14159265359='.(3.14159265359).'<p>';
	echo '第三种：314159265359E-11='.(314159265359E-11).'<p>';
 ?>
<!-- 数组 -->
<?php 
	$array = array('value1','value2');
	echo $array[0];
 ?>
<!-- 特殊数据类型 -->
<!-- 
	resource资源:
				资源是一种特殊变量，又叫做句柄，保存了到外部资源的一个引用。
				资源是通过专门的函数来建立使用
 -->
 <!-- 
 	null空值
 			表示没有纸，唯一的值就是null

  -->
<?php 
	echo "<p>变量(\$string1)直接赋值为null";
	$string1 = null;
	$string3 = 'str';
	if (!isset($string1)) { 
		# code...
		echo "<p>string1 = null";
	}
	if (!isset($string2)) {//判断string2是否被设置
		# code...
		echo "<p>string2 = null";

	}
	echo "<p>被unset()函数处理过的变量(\$string3)";
	unset($string3); //释放string3
	if (!isset($string3)) {
		echo "<p>string3 = null";
	}
 ?>

 <!-- 数据类型转换 -->
<?php 
	$num = '3.1415926r*r';			//声明一个字符串变量
	echo "使用integer操作转变量$num类型:";

	echo (integer)$num;				//其实就是强转
	echo "<p>";
	echo "输出变量$num的值：".$num; 

 ?>


 <!-- 监测数据类型 -->
<!-- 
	is_bool  检查是否为bool类型
	is_string 检查变量是否为字符串
	is_numeric 检查是否为数字或由数字组成的字符串
	等等等
 -->


<!--    常量    -->
<!-- 
	php中使用define()函数来定义常量
	
	//声明
	//1.必选参数，常量名称，  2.必选参数，常量的值 3.可选参数，指定是否大小写敏感 设定为 true 不敏感
	define(string constant_name,mixed valie,case_sensitive=false)


	//获取
	mixed constant(string const_name)

	//判断一个常量是否已经定义
	defined()函数:
		defined(string const_name)

	constant()函数:
	动态获取常量的值
	eg:
		define('test1','哈哈哈',false);
		$name = 'test1';
		echo constant($name)   //输出=>哈哈哈
 -->


<!-- 预定义常量 -->
<!-- 
		常量名				功能
	  __FILE__		默认常量，php程序文件名
	  __LINE__
	  PHP_VERSION	内建常量，php程序的版本，如，php6.0.0-dev
	  PHP_OS		内建常量，执行php解析器的操作系统
	  E_ERROR		最近的错误处
	  E_WARNING		最近的警告
	  E_PARSE		语法潜在问题
	  E_NOTICE		不寻常处提示但不一定是错误处
 -->
 <?php 
 		echo "当前文件路径：".__FILE__;
 		echo "<br>当前行数:".__LINE__;
 		echo "<br>当前版本:".PHP_VERSION;
 		echo "<br>当前操作系统:".PHP_OS;

 ?>












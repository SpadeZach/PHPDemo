<?php 
	session_start();		//初始化
	header("content-type:image/png");
	$imageW = 70;
	$imageH = 18;
	srand(microtime()*100000);			//设置随机数种子
	$new_number="";
	for ($i=0; $i <4 ; $i++) { 
		# code...
		$new_number .=dechex(rand(0,15));	//循环输出4位的随机数
	}
	$_SESSION['check_checks'] = $new_number; //将获取的随机数验证码写入Session变量中
	$num_image = imagecreate($imageW,$imageH);//创建画布
	imagecolorallocate($num_image,221,221,221);
	for ($i=0; $i < strlen($_SESSION['check_checks']); $i++) { 	//将获取的随机数验证码写入Session变量中
		# code...
		$font = mt_rand(3,5);					//设置随机的字体
		$x = mt_rand(1,8)+$imageW *$i/4;		//设置随机的字体X坐标
		$y = mt_rand(1,$imageH/4);				//设置随机的字体Y坐标
		$color = imagecolorallocate($num_image,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));	//设置字符颜色
		imagestring($num_image,$font,$x,$y,$_SESSION['check_checks'][$i],$color);
	}

	imagepng($num_image);			//生成PNG格式图像
	imagedestroy($num_image);		//释放资源

 ?>
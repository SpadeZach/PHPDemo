<?php 
	/***  连接数据库  ***/
	$host = "127.0.0.1";
	$userName = "root";
	$password = "123321";
	if ($connID = mysqli_connect($host,$userName,$password)) {
		echo "<script type = 'text/javascript'>alert('数据库连接成功');</script>";
	}else{
		echo "<script type = 'text/javascript'>alert('数据库连接失败');</script>";
	}

	/***  选择数据库  ***/
	$dbName = "db_database18";
	if (mysqli_select_db($connID,$dbName)) {
		echo "数据库选择成功";
		$result = mysqli_query($connID,"insert into_member values('哈哈','123','123@qq.com')");
		while($myrow = mysqli_fetch_array($result));		//查询结果返回为数组

	}else{
		echo "数据库选择失败";
	}

 ?>
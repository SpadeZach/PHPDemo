<?php 
	/*  声明接口MPopedom  */
	interface MPopedom{
		function popedom();
	}
	/*  声明接口MPurview  */
	interface MPurview{
		function purview();
	}

	/* 创建子类Member,实现一个接口MPurview */
	class Member implements MPurview{
		function purview(){
			echo "会员拥有权限";
		}
	}

	/* 创建子类Manager,实现一个接口MPurview和MPopedom */
	class Manager implements MPurview,MPopedom{
		function purview(){
			echo "管理员拥有会员全部权限";
		}
		function popedom(){
			echo "管理员还有会员没有的权限";
		}
	}
	/*  类的实例化  */
	$member =  new Member();
	$manager = new Manager();
	//调用对象方法
	$member -> purview();
	echo '<p>';
	$manager -> purview();
	$manager -> popedom();

 ?>
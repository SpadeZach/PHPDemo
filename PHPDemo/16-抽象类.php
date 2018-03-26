<?php 
	
	abstract class CommodityObject{
		abstract function service($getName,$price,$num);		//定义抽象方法
	}

	class Mybook extends CommodityObject{						//子类
		function service($getName,$price,$num){
			echo "您购买的商品".$getName.'该商品价格'.$price.'元';
			echo "您购买的数量".$num.'本';
			echo "如发现损坏，请在3日内更换";
		}
	}
	$book = new Mybook();
	$book -> service('《PHP从入门到精通》',85,3);
 ?>
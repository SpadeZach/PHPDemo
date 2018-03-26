<?php 

	class MsubStr{

		function cusbstr($str,$start,$len){			//1.指定字符，2.字符串其实位置，3.长度
			$strlen = $start + $len;				//$strlen字符串的总长度
			$tmpstr = "";							//初始化变量
			for ($i=0; $i < $strlen; $i++) { 
				if (ord(substr($str,$i,1)) > 0xa0) {	//如果字符串收个字节的ASCII序数值大于0xa0则表示为汉字
					$tmpstr = substr($str,$i,2);	//每次取出2位字符赋给变量$tmpstr，即等于一个汉字
					$i++;

				}else{
					$tmpstr = substr($str,$i,1);	//
				}
			}
			return $tmpstr;
		}
	}
	$mc = new MsubStr();
 ?>
 <table width="204" height="195" border="0" cellpadding="0" cellspacing="0" bgcolor="#f78fec">
 	<tr>
 		<td>
 			<?php 
 				$string = "PHP入门到精通的学习";
 				if (strlen($string)>10) {
 					echo substr($string,0,12)."...";	//截取字符串中9个字符
 				}else{
 					echo $string;
 				}
 			 ?>
 		</td>
 	</tr>
 	<tr>
 		<td>
 			<?php 
 				$string = "PHP入门到精通的学习123";
 				if (strlen($string)>10) {
 					# code...
 					echo $mc -> cusbstr($string,"0","9")."...";	//应用类中打的方法截取字符串
 				}else{
 					echo $string;
 				}
 			 ?>

 		</td>

 	</tr>
 	<tr>
 		<td>
 			<?php 
 				$string = "PHP入门到精通的学习";
 				if (strlen($string)>30) {
 					# code...
 					echo $mc -> cusbstr($str,"0","20")."...";	//应用类中打的方法截取字符串
 				}else{
 					echo $string;
 				}
 			 ?>

 		</td>

 	</tr>
 </table>

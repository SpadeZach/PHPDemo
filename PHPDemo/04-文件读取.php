<!-- <?php 
	



 ?> -->
<!--  <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	
 </body>
 </html> -->
 <table width="500" border="1" cellpadding="0" cellpadding="0">
 		<tr>
 			<td width="253" height="100" align="right" valign="middle" scope="col">
 				使用readfile()函数读取文件内容
 			</td>
			<td width="241" height="100" align="center" valign="middle" scope="col">
				<!-- 使用readfile()函数读取tm.txt文件的内容 -->
				<?php  readfile('tm.txt')?>

			</td>
 		</tr>
 		<tr>
 			<td height="100" align="right" valign="middle">
 				使用file函数读取文件内容
 			</td>
			<td width="241" height="100" align="center" valign="middle" scope="col">
				<?php  
					$f_arr = file('tm.txt');
					foreach ($f_arr as $cont) {
						# code...
						echo $cont."<br>";
					}

				?>

			</td>	
 		</tr>
 		<tr>
 			<td width="250" height="25" align="right" valign="middle" scope="col">
 				使用file_get_contents()函数读取文件内容
 			</td>
 			<td width="241" height="100" align="center" valign="middle" scope="col">
 				<?php 
 					$f_chr = file_get_contents('tm.txt');
 					echo $f_chr; 

 				?>
 			</td>

 		</tr>

 	</table>
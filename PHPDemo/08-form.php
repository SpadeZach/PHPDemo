<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 多文件上传 -->
	<!-- enctype="multipart/form-data"必须要有 -->
	<form action="" method="post" enctype="multipart/form-data">
		<table id = "up_table" border="1" bgcolor="f0f0f0">
			<tbody id="aoto">
				<tr id="show">
					<td>上传文件</td>
					<td><input type="file" name="u_file[]"></td>
				</tr>
				<tr id="show">
					<td>上传文件</td>
					<td><input type="file" name="u_file[]"></td>
				</tr>
			</tbody>
			<tr><td colspan="4"><input type="submit" value="上传"></td></tr>
		</table>
		<?php 

			if (!empty($_FILES[u_file][name])) {
				# code...
				$file_name = $_FILES[u_file][name];				//将上传文件名另存为数组
				$file_tmp_name = $_FILES[u_file][name];			//将上传的临时文件名存为数组
				for ($i=0; $i < count($file_name); $i++) { 		//循环上传文件
					if ($file_name[$i] !='') {					//判断上传文件名是否为空
						move_uploaded_file($file_tmp_name[$i],$i.$file_name[$i]);
						echo "文件".$file_name[$i]."上传成功。更名为".$i.$file_name[$i]."<br>";
					}
				}
			}

		 ?>


	</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
		<table width="405" border="1" cellpadding="1" cellspacing="1" bordercolor="#ffffff" bgcolor="#999999">
			<tr bgcolor="#FFCC33">
				<td width="103" height="25" align="right">姓名</td>
				<td width="144" height="25" colspan="2" align="left"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
			</tr>
			<tr bgcolor="#FFCC33">
				<td height="25" align="right">性别</td>
				<td height="25" colspan="2" align="left"><input name="sex" type="radio" value="男" checked>男<input name="sex" type="radio" value="女">女</td>
			</tr>
			<tr bgcolor="#FFCC33">
				<td width="103" height="25" align="right">密码</td>
				<td width="289" height="25" colspan="2" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
			</tr>
			<tr bgcolor="#FFCC33">
				<td height="25" align="right">学历</td>
				<td height="25" colspan="2" align="left">
				<select name="select">
					<option value="专科">专科</option>
					<option value="本科" selected>本科</option>
				</select>
				</td>
			</tr>

		</table>

	</form>
</body>
</html>
<form>
	</form>


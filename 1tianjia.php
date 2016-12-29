<?php
if(isset($_POST['ac']) && $_POST['ac']=='yingcang'){
$name=$_POST['name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$edu=$_POST['edu'];
$salary=$_POST['salary'];
$bonus=$_POST['bonus'];
$city=$_POST['city'];
header("content-type:text/html;chatset=utf-8");
mysql_connect("localhost","root","root");
mysql_select_db("itcast");
mysql_query("set names utf8");
$sql="insert into student values(null,'$name','$sex',$age,'$edu',$salary,$bonus,'$city')";
mysql_query($sql);
if(mysql_query($sql)){
	echo "<script type='text/javascript'>
	location.href='caozuomysql.php'
	</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改数据</title>
</head>
<body>
	<form method="post" action="" align="left">
		姓名：<input type="text" name="name"><br>
		性别：<input type="radio" name="sex" value="男">男
			  <input type="radio" name="sex" value="女">女<br>
		年龄：<input type="text" name="age"><br>
		学历：<select name="edu">
			  <option>初中</option>
			  <option>高中</option>
			  <option>大专</option>
			  <option>大本</option>
			  <option>研究生</option>
			  </select>
		<br>
		工资：<input type="text" name="salary"><br>
		奖金：<input type="text" name="bonus"><br>
		籍贯：<select name="city">
				<option>上海市</option>
				<option>北京市</option>
				<option>天津市</option>
				<option>河南省</option>
				<option>安徽省</option>
				<option>山东省</option>
				<option>山西省</option>
				<option>河北省</option>
				<option>湖南省</option>
				<option>辽宁省</option>
				<option>陕西省</option>
				<option>甘肃省</option>				
				</select><br>	
		<input type="hidden" name="ac" value="yingcang">
		<input type="submit" value="提交">
	</form>
</body>
</html>
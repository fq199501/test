<?php
	include("public.php");
	if (isset($_POST['ac'])&&$_POST['ac']=='yanzheng'){
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$age=$_POST['age'];
		$edu=$_POST['edu'];
		$salary=$_POST['salary'];
		$bonus=$_POST['bonus'];
		$city=$_POST['city'];
	$sql="insert into student values(null,'$name','$sex','$age','$edu','$salary','$bonus','$city')";
	if(mysql_query($sql)){
		echo "<script type='text/javascript'>location.href='showtable.php'</script>";
	}else{
		echo "<script type='text/javascript'>
		window.alert('提交失败')</script>";
	}	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		姓名：<input type="text" name="name"><br>
		性别：<input type="radio" name="sex" value="男" checked="checked">男
			  <input type="radio" name="sex" value="女">女<br>
		年龄：<input type="text" name="age"><br>
		学历：<select name="edu">
				<option value="初中">初中</option>
				<option value="高中">高中</option>
				<option value="大专">大专</option>
				<option value="大本">大本</option>		
				<option value="研究生">研究生</option>					
				</select><br>
		工资：<input type="text" name="salary"><br>
		奖金：<input type="text" name="bonus"><br>
		籍贯：<select name="city">
				<option value="上海市">上海市</option>
				<option value="北京市">北京市</option>
				<option value="天津市">天津市</option>
				<option value="河南省">河南省</option>
				<option value="安徽省">安徽省</option>
				<option value="山东省">山东省</option>
				<option value="山西省">山西省</option>
				<option value="河北省">河北省</option>
				<option value="湖南省">湖南省</option>
				<option value="辽宁省">辽宁省</option>
				<option value="陕西省">陕西省</option>
				<option value="甘肃省">甘肃省</option>
		</select><br>
		<input type="submit" name="提交">
		<input type="hidden" name="ac" value="yanzheng">
	</form>
</body>
</html>
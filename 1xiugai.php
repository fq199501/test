<?php
header("content-type:text/html;charset=utf-8");
$id=$_GET['id'];
	mysql_connect("localhost","root","root");
	mysql_select_db("itcast");
	mysql_query("set names utf8");
	$sql="select * from student where id=$id";
	$result=mysql_query($sql);
	$arr=mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改数据</title>
</head>
<body>
	<form method="post" action="doxiugai.php" align="left">
		姓名：<input type="text" name="name" value="<?php if(isset($arr['name'])) echo $arr['name']?>"><br>
		性别：<input type="radio" name="sex" value="男" <?php if(isset($arr['sex'])&&$arr['sex']=='男'){echo "checked='checked'";}?>>男
			  <input type="radio" name="sex" value="女" <?php if(isset($arr['sex'])&&$arr['sex']=='女'){echo "checked='checked'";}?>>女<br>
		年龄：<input type="text" name="age" value="<?php if(isset($arr['age'])){echo $arr['age'];}?>"><br>
		学历：<select name="edu">
			  <option value="初中" <?php if(isset($arr['edu'])&&$arr['edu']=='初中'){echo "selected='selected'";}?>>初中</option>
			  <option value="高中" <?php if(isset($arr['edu'])&&$arr['edu']=='高中'){echo "selected='selected'";}?>>高中</option>
			  <option value="大专" <?php if(isset($arr['edu'])&&$arr['edu']=='大专'){echo "selected='selected'";}?>>大专</option>
			  <option value="大本" <?php if(isset($arr['edu'])&&$arr['edu']=='大本'){echo "selected='selected'";}?>>大本</option>
			  <option value="研究生" <?php if(isset($arr['edu'])&&$arr['edu']=='研究生'){echo "selected='selected'";}?>>研究生</option>
			  </select>
		<br>
		工资：<input type="text" name="salary" value="<?php if(isset($arr['salary'])){echo $arr['salary'];}?>"><br>
		奖金：<input type="text" name="bonus" value="<?php if(isset($arr['bonus'])){echo $arr['bonus'];}?>"><br>
		籍贯：<select name="city">
				<option value="上海市" <?php if(isset($arr['city'])&&$arr['city']=='上海市'){echo "selected='selected'";}?>>上海市</option>
				<option value="北京市" <?php if(isset($arr['city'])&&$arr['city']=='北京市'){echo "selected='selected'";}?>>北京市</option>
				<option value="天津市" <?php if(isset($arr['city'])&&$arr['city']=='天津市'){echo "selected='selected'";}?>>天津市</option>
				<option value="河南省" <?php if(isset($arr['city'])&&$arr['city']=='河南省'){echo "selected='selected'";}?>>河南省</option>
				<option value="安徽省" <?php if(isset($arr['city'])&&$arr['city']=='安徽省'){echo "selected='selected'";}?>>安徽省</option>
				<option value="山东省" <?php if(isset($arr['city'])&&$arr['city']=='山东省'){echo "selected='selected'";}?>>山东省</option>
				<option value="山西省" <?php if(isset($arr['city'])&&$arr['city']=='山西省'){echo "selected='selected'";}?>>山西省</option>
				<option value="河北省" <?php if(isset($arr['city'])&&$arr['city']=='河北省'){echo "selected='selected'";}?>>河北省</option>
				<option value="湖南省" <?php if(isset($arr['city'])&&$arr['city']=='湖南省'){echo "selected='selected'";}?>>湖南省</option>
				<option value="辽宁省" <?php if(isset($arr['city'])&&$arr['city']=='辽宁省'){echo "selected='selected'";}?>>辽宁省</option>
				<option value="陕西省" <?php if(isset($arr['city'])&&$arr['city']=='陕西省'){echo "selected='selected'";}?>>陕西省</option>
				<option value="甘肃省" <?php if(isset($arr['city'])&&$arr['city']=='甘肃省'){echo "selected='selected'";}?>>甘肃省</option>			
				</select><br>	
		<input type="hidden" name="ac" value="yingcang">
		<input type="submit" value="提交">
	</form>
</body>
</html>
<?php
header("content-type:text/html;charset=utf-8");
include("public.php");
$sql="select * from student order by id desc";
$res=mysql_query($sql);
//$sql1="select"





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息表</title>
	<style type='text/css'>
		*{margin: 0,padding: 0;}
		table{margin: 0 auto;border-collapse: collapse;text-align: center;background-color: #eee}
		table tr td{width: 80px;height: 30px;border: 1px solid #ccc}
		h2{text-align: center}
		p{text-align: center;}
		a{color:orange}
	</style>
</head>
<body>
<h2>学生信息表</h2>
<p><a href="addinfo.php">添加信息</a></p>
	<table>
		<tr>
			<td>序号</td>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td>学历</td>
			<td>工资</td>
			<td>奖金</td>
			<td>籍贯</td>
			<td>修改</td>
		</tr>
<?php	
while($arr=mysql_fetch_assoc($res)){	
	echo <<<Index
		<tr>
			<td>{$arr['id']}</td>
			<td>{$arr['name']}</td>
			<td>{$arr['sex']}</td>
			<td>{$arr['age']}</td>
			<td>{$arr['edu']}</td>
			<td>{$arr['salary']}</td>
			<td>{$arr['bonus']}</td>
			<td>{$arr['city']}</td>
			<td>
				<a href="alter.php?id=$arr[id]">修改</a>
				<a href="delete.php?id=$arr[id]">删除</a>
			</td>
		</tr>
Index;
	}
?>	
	</table>
</body>
</html>




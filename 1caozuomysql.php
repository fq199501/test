<?php
header("Content-Type:text/html;charset=utf-8");
//连接数据库
define("host","localhost");
define("name","root");
define("pass","root");
$connect=mysql_connect(host,name,pass);
if(!$connect){
	exit("数据库连接失败");
}
//使用数据库
$db="itcast";
$use=mysql_select_db($db);
if(!$use){
	exit("数据库不存在");
}
//操作数据库
//设置字符集
mysql_query("set names utf8");
$sql="select * from student order by id desc";
$res=mysql_query($sql);
// $arr=mysql_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title>学生信息表</title>
<!-- 	<meta charset="utf-8"> -->
	<style type="text/css">
	table{width:800px;border-collapse:collapse;
		border:1px solid #ccc;text-align:center;
		margin:0 auto}
	tr{height:50px;}
	td,th{border:1px solid #ccc;}
	</style>
</head>
<body>
	<h2 align="center">学生信息表</h2>
	<a href="tianjia.php">添加信息</a>
	<table>
		<tr>
			<th>序列</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>学历</th>
			<th>工资</th>
			<th>奖金</th>
			<th>籍贯</th>
			<th>操作</th>
		</tr>
	<?php
	while($arr=mysql_fetch_assoc($res)){
	?>
		<tr>
			<td><?php echo $arr['id']?></td>
			<td><?php echo $arr['name']?></td>
			<td><?php echo $arr['sex']?></td>
			<td><?php echo $arr['age']?></td>
			<td><?php echo $arr['edu']?></td>
			<td><?php echo $arr['salary']?></td>
			<td><?php echo $arr['bonus']?></td>
			<td><?php echo $arr['city']?></td>
			<td>
				<a href="xiugai.php?id=<?php echo$arr['id']?>">修改</a>
				<a href="javascript:void(0)" onClick="jump(<?php echo $arr['id']?>)">删除</a>
			</td>
		</tr>
<?php }?>		
	</table>
<script type="text/javascript">
function jump(id){
	if(window.confirm("你确定要删除我?")){
		location.href="shanchu.php?id="+id
	}
}
</script>	
</body>
</html>
<?php
header("content-type:text/html;charset=utf-8");
mysql_connect("localhost","root","root");
mysql_select_db("itcast");
mysql_query("set names utf8");
$id=$_GET['id'];
$sql="delete from student where id=$id";
$res=mysql_query($sql);
if($res){
	echo "<script>
		location.href='caozuomysql.php';
	</script>";
}else{
	echo "数据删除失败!";
}
?>
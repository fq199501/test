<?php
include("public.php");
$id=$_GET['id'];
$sql="delete from student where id=$id";
if(mysql_query($sql)){
	echo "<script type='text/javascript'>location.href='showtable.php'</script>";
}else{
	echo "删除信息失败";
}
?>
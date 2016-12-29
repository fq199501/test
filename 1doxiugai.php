<?php

include_once('xiugai.php');
mysql_connect("localhost","root","root");
mysql_select_db("itcast");
mysql_query("set names utf8");
if (isset($_POST['ac'])&&$_POST['ac']='yingcang') 
 {
 	
 	
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$edu=$_POST['edu'];
	$salary=$_POST['salary'];
	$bonus=$_POST['bonus'];
	$city=$_POST['city'];
	mysql_query("update student set name=$name,sex=$sex,age=$age,edu=$edu,salary=$salary,bonus=$bonus,city=$city where id=$id");
 }




?>
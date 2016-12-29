<?php
//连接数据库
define("host", "localhost");
define("name","root");
define("pass","root");
mysql_connect(host,name,pass);
mysql_select_db("itcast");
mysql_query("set names utf8");
?>
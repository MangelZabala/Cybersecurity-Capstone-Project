<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Master = "50.62.209.157";
$database_Master = "master";
$username_Master = "test";
$password_Master = "123456";
$Master = mysql_pconnect($hostname_Master, $username_Master, $password_Master) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
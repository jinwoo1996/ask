<?
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "apmsetup";
	$mysql_database = "ask";

	$db_connect = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("DB connect error");
	mysql_select_db($mysql_database, $db_connect) or die("DB connect error");
?>
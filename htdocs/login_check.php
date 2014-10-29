<?
	include("db_connect.php");
	session_start();

	$pw = $_POST['user_pw'];

	if($pw == "wlsdn1"){
		echo "로그인성공";
	}else{
		echo "실패";
	}
?>
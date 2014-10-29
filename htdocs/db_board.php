<?
	$content = $_POST['content'];
	$date = date("Y-m-d H:i:s",time());
	if($content){
		$db = @mysql_connect("localhost", "root", "apmsetup") or exit('DB error');
		@mysql_select_db("ask", $db) or exit('DB error');

		@mysql_query("INSERT INTO board(`content`, `date`) VALUES('".$content."','".$date."')") or die(mysql_error());

		if(mysql_affected_rows() == 1){
			echo "질문이 등록 되었습니다.";
		}else{
			echo "질문 등록에 실패하였습니다.";
		}
		@mysql_close($db);
	}
?>
<br>
<a href = "index.php">홈으로 돌아가기</a>
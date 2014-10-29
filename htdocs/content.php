<?
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "apmsetup";
	$mysql_database = "ask";

	$db_connect = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database, $db_connect);
	$sql = "select * from board;";
	$result = mysql_query($sql, $db_connect);

	while($row = mysql_fetch_array($result)){
		echo "
		<div class = 'bs-example'>
		<table class = 'table table-bordered'>
			<thead>
			<tr>
				<th>Question</th>
				<th>Q Time</th>
				<th>Apply</th>
				<th>A Time</th>
			</tr>
			</thead>
			<tbody align = 'left'>
			<tr>
				<td> $row[content] </td>
				<td> $row[date] </td>
				<td></td>
				<td></td>
			</tr>
			</tbody>
		</table>
		</div>
		<a href = 'admin_login.php'>
                        <button type='button' class='btn btn-default btn-lg'>
                            <h4>답변하기</h4>
                        </button>
                    </a>
					<br><br><br>
		";
	}
?>
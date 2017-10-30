<?
	session_start();

	$connect=mysql_connect("localhost","root","apmsetup") or die("sql server연결 실패");
	
	mysql_select_db("mysql",$connect);

	$sql = "select * from notice_board where num='$num'";
	$result=mysql_query($sql,$connect);

	$row=mysql_fetch_array($result);

	//$new_hit = $row[hit]+1;
	
	//$sql = "update notice_board set hit='$new_hit'";
?>
<html>
<head>
</head>
<body>
<h1>공지사항</h1>
<table>
<tr><td><?=$row[subject]?></td></tr>
<tr><td>글쓴이 : <?=$row[name]?></td></tr>
<tr><td><?=$row[content]?></td></tr>
</table>
<div><a href="modify.php?num=$num"><img src="./image/i_edit.gif"></a> &nbsp;&nbsp;
	<a href="delete.php?num=$num"><img src="./image/i_del.gif"></a> &nbsp;&nbsp;
	<a href="list.php"><img src="./image/i_list.gif"></a> 
</body>
</html>
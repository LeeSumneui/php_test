<?
	session_start();
	
	$connect=mysql_connect("localhost","root","apmsetup") or die("sql server연결 실패");
	
	mysql_select_db("mysql",$connect);
	
	$_SESSION['username']="admin";
	
?>
<html>
<head>
</head>
<body>
<h1>공지사항</h1>
<form name="write" method="post" action="insert.php">
<table>
<tr><td>제목</td><td><input type="text" name="subject"></td></tr>
<tr><td>내용</td><td><textarea cols=50 rows=10 name="content"></textarea></td></tr>
</table>
<div style="float:left;"><input type="submit" name="submit" value="글쓰기"></div>
<div style="float:left;"><a href="list.php"><img src="./image/i_list.gif"></a></div>
</form>
</body>
</html>
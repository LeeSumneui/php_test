<?
	session_start();
	
	$connect=mysql_connect("localhost","root","apmsetup") or die("sql server���� ����");
	
	mysql_select_db("mysql",$connect);
	
	$_SESSION['username']="admin";
	
?>
<html>
<head>
</head>
<body>
<h1>��������</h1>
<form name="write" method="post" action="insert.php">
<table>
<tr><td>����</td><td><input type="text" name="subject"></td></tr>
<tr><td>����</td><td><textarea cols=50 rows=10 name="content"></textarea></td></tr>
</table>
<div style="float:left;"><input type="submit" name="submit" value="�۾���"></div>
<div style="float:left;"><a href="list.php"><img src="./image/i_list.gif"></a></div>
</form>
</body>
</html>
<?
	session_start();

	$register_day = date("Y-m-d(H:i)");

	if($username!="admin")
	{
		echo "<script>window.alert('�����ڸ� ������ �� �ֽ��ϴ�.'); history.go(-1);</script>";
		exit;
	}
	if(!$subject)
	{
		echo "<script>window.alert('������ �Է��ϼ���'); history.go(-1);</script>";
		exit;
	}
	
if(!$content)
	{
		echo "<script>window.alert('������ �Է��ϼ���'); history.go(-1);</script>";
		exit;
	}

	$connect=mysql_connect("localhost","root","apmsetup") or die("sql server���� ����");
	
	mysql_select_db("mysql",$connect);

	
	$sql = "insert into notice_board (id, name, subject, content, regist_day,hit) ";
	$sql .= "values('$username','$username','$subject','$content','$register_day',0)";

	mysql_query($sql,$connect);

	$sql = "select * from notice_board where subject='$subject'";	
	
	$result=mysql_query($sql,$connect);

	$row = mysql_fetch_array($result);

	$num=$row[num];
	mysql_close();

	echo "<script>location.href='./view.php?num=$num';</script>";
?>
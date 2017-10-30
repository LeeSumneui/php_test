<?
	session_start();

	$register_day = date("Y-m-d(H:i)");

	if($username!="admin")
	{
		echo "<script>window.alert('관리자만 접근할 수 있습니다.'); history.go(-1);</script>";
		exit;
	}
	if(!$subject)
	{
		echo "<script>window.alert('제목을 입력하세요'); history.go(-1);</script>";
		exit;
	}
	
if(!$content)
	{
		echo "<script>window.alert('내용을 입력하세요'); history.go(-1);</script>";
		exit;
	}

	$connect=mysql_connect("localhost","root","apmsetup") or die("sql server연결 실패");
	
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
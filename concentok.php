<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include 'conn.php';
session_start();

if(empty($_SESSION['uname']))
{
	echo "<script type='text/javascript'>";
	echo "alert('请先登录');";
	echo "window.location.href='index.php';";
	echo "</script>";
}
else
{
	$ly=$_POST['liuyan'];
	$uname=$_SESSION['uname'];
	$sql="insert into idea(c_name,new_message,new_time) values('$uname','$ly',now())";
	$re=mysql_query($sql);
	if($re)
	{
		echo "<script type='text/javascript'>";
	echo "alert('留言成功');";
	echo "window.location.href='concent.php';";
	echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
	echo "alert('留言失败');";
	echo "window.location.href='concent.php';";
	echo "</script>";
	}
}
?>
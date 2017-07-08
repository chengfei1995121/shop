<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include('conn.php');
Session_start();
?>
<?php
$uname=$_POST['uname'];
$p=$_POST['password'];
$yzm=$_POST['yzm'];
if($yzm!=$_SESSION['img'])
{
	echo "<script type='text/javascript'>";
	echo "alert('验证码错误');";
	echo	"window.location.href='user_log_in.html';";
	echo "</script>";
}
$sql="select * from customer where c_name='$uname' and c_pass='$p';";
$re=mysql_query($sql);
if($result=mysql_fetch_array($re))
{
	$_SESSION['uname']=$result['c_name'];
	echo "<script type='text/javascript'>";
	echo "alert('登录成功');";
	echo	"window.location.href='index.php';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('登录失败');";
	echo	"window.location.href='index.php';";
	echo "</script>";
}
?>
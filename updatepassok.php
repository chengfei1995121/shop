<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include 'conn.php';
session_start();
?>
<?php
$uname=$_SESSION['uname'];
$oldpass=$_POST['opassword'];
$pass=$_POST['password'];
$sql="select * from customer where c_name='$uname' and c_pass='$oldpass'";
$r=mysql_query($sql);
if(!($re=mysql_fetch_array($r)))
{
	echo "<script type='text/javascript'>";
	echo "alert('旧密码错误');";
	echo	"window.location.href='updatepass.php';";
	echo "</script>";
}
else{
	$sql="update customer set c_pass='$pass' where c_name='$uname'";
	$r=mysql_query($sql);
	if($r)
	{
	echo "<script type='text/javascript'>";
	echo "alert('修改成功');";
	echo	"window.location.href='geren.php';";
	echo "</script>";
	}
	else
	{
echo "<script type='text/javascript'>";
	echo "alert('修改失败');";
	echo	"window.location.href='updatepass.html';";
	echo "</script>";
	}
}
?>
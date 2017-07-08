<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include 'conn.php';
session_start();
?>
<?php 
$opass=$_POST['jpass'];
$npass=$_POST['npass'];
$qpass=$_POST['qpass'];
if($npass!=$qpass)
{
	echo "<script type='text/javascript'>";
	echo "alert('两次密码不一致');";
	echo	"window.location.href='index.php?yemian=4';";
	echo "</script>";
}
else
{
	$aname=$_SESSION['aname'];
	$sql="select * from admin where a_name='$aname' and a_pass='$opass'";
	$r=mysql_query($sql);
	if($result=mysql_fetch_array($r))
	{
		$sql="update admin set a_pass='$npass' where a_name='$aname'";
		$r=mysql_query($sql);
		if($r)
		{
			echo "<script type='text/javascript'>";
	echo "alert('修改成功');";
	echo	"window.location.href='index.php?yemian=4';";
	echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
	echo "alert('修改失败');";
	echo	"window.location.href='index.php?yemian=4';";
	echo "</script>";
		}
	}
	else{
		echo "<script type='text/javascript'>";
	echo "alert('旧密码错误');";
	echo	"window.location.href='index.php?yemian=4';";
	echo "</script>";
	}
}
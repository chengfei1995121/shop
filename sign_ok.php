<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include('conn.php');
?>
<?php
$uname=$_POST['uname'];
$pass=$_POST['password'];
$e=$_POST['email'];
$p=$_POST['phone'];
$wenti=$_POST['wenti'];
$daan=$_POST['daan'];
$address=$_POST['address'];
$sql="insert into customer(c_name,c_pass,c_email,c_phone,c_question,c_answer,c_address) values('$uname','$pass','$e','$p','$wenti','$daan','$address')";
$re=mysql_query($sql);
if($re)
{
	echo "<script type='text/javascript'>";
	echo "alert('注册成功');";
	echo "window.location.href='index.php';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('注册失败');";
	echo "window.location.href='index.php';";
	echo "</script>";
}
?>
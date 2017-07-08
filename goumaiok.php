<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include 'conn.php';
session_start();?>
<?php
$id=$_GET['id'];
$sql="select * from product where p_id='$id'";
$r=mysql_query($sql);
$result=mysql_fetch_array($r);
$cname=$_SESSION['uname'];
$sql="select * from customer where c_name='$cname'";
$r=mysql_query($sql);
$user=mysql_fetch_array($r);
$jiage=$result['p_price'];
$shuliang='1';
$oid=date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
$sql="insert into orderdetails values('$oid','$id','$jiage','$shuliang','$cname')";
$rr=mysql_query($sql);
if($rr)
{
echo "<script type='text/javascript'>";
	echo "alert('购买成功');";
	echo "window.location.href='index.php';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('购买失败');";
	echo "window.location.href='goumai.php';";
	echo "</script>";
}
?>
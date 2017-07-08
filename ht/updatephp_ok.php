<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include ("../conn.php");
session_start();
?>
<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pc=$_POST['pc'];//数量
$ptime=$_POST['ptime'];
$pprice=$_POST['pprice'];
$pin=$_POST['pin'];
$sql="update product set p_name='$p_name',p_price='$pprice',p_quantity='$pc',p_description='$pin',p_time='ptime' where p_id='$pid'";
$r=mysql_query($sql);
if($r)
{
	echo "<script type='text/javascript'>";
	echo "alert('修改成功');";
	echo	"window.location.href='htindex.php';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('修改失败');";
	echo	"window.location.href='htindex.php';";
	echo "</script>";
}
?>
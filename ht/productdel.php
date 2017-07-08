<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include('conn.php');
?>
<?php
$orderid=$_GET['id'];
$sql="delete from product where p_id='$orderid'";
$r=mysql_query($sql);
if($r)
{
echo "<script type='text/javascript'>";
	echo "alert('删除成功');";
	echo	"window.location.href='index.php?yemian=2';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('删除失败');";
	echo	"window.location.href='index.php?yemian=2';";
	echo "</script>";
}
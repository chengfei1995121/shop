<?php
include 'conn.php';
?>
<?php
$lid=$_POST['lid'];
$ln=$_POST['ln'];
$sql="insert into main_type values('$lid','$ln')";
$r=mysql_query($sql);
if($r)
{
	echo "<script type='text/javascript'>";
	echo "alert('添加成功');";
	echo	"window.location.href='index.php?yemian=6';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('添加失败');";
	echo	"window.location.href='index.php?yemian=6';";
	echo "</script>";
}
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include('conn.php');
?>
<?php
$id=$_GET['id'];
$sql="delete from idea where id='$id'";
$r=mysql_query($sql);
if($r)
{
echo "<script type='text/javascript'>";
	echo "alert('删除成功');";
	echo	"window.location.href='index.php?yemian=5';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('删除失败');";
	echo	"window.location.href='index.php?yemian=5';";
	echo "</script>";
}
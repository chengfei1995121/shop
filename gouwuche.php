<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include 'conn.php';
session_start();
?>
<?php 
if(empty($_SESSION['uname']))
{
	echo "<script type='text/javascript'>";
	echo "alert('请先登录');";
	echo "window.location.href='index.php';";
	echo "</script>";
}
else
{
	$id=$_GET['id'];
	$cname=$_SESSION['uname'];
	$sql="select * from cat where p_id='$id'";
	$re=mysql_query($sql);
	if($result=mysql_fetch_array($re))
	{
		$suliang=$result['number'];
		$suliang=$suliang+1;
		$sql="update cat set number=$suliang where p_id='$id'";
		$r=mysql_query($sql);
		if($r)
		{
			echo "<script type='text/javascript'>";
			echo "alert('加入成功');";
			echo "window.location.href='xq.php?id=$id';";
			echo "</script>";
			//echo "a";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('加入失败');";
			echo "window.location.href='xq.php?id=$id';";
			echo "</script>";
			//echo "b";
		}
	}
	else{
		$sql="insert into cat(uname,p_id,number) values('$cname','$id',1)";
		$r=mysql_query($sql);
		if($r)
		{
			echo "<script type='text/javascript'>";
			echo "alert('加入成功');";
			echo "window.location.href='xq.php?id=$id';";
			echo "</script>";
			//echo "c";
		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('加入失败');";
			echo "window.location.href='xq.php?id=$id';";
			echo "</script>";
		}
	}
}
?>
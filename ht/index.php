<?php include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="ht.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php 
if(empty($_SESSION['aname']))
{
	echo "<script type='text/javascript'>";
	echo "alert('请先登录');";
	echo	"window.location.href='admin_log_in.html';";
	echo "</script>";
}
?>
<?php 
if(empty($_GET['yemian']))
{
	$yemian=1;
}
else
{
	$yemian=$_GET['yemian'];
}
?>
<div class="head">
	<div class="gl">后台管理系统</div>
	<div class="yh">欢迎<?php echo $_SESSION['aname'];?> <a href="tuichu.php" style="color:#000;">退出</a></div>
</div>
<div class="zuoc">
<ul>
	<li><a href="index.php?yemian=1">商品添加</a></li>
	<li><a href="index.php?yemian=2">商品管理</a></li>
	<li><a href="index.php?yemian=3">订单管理</a></li>
	<li><a href="index.php?yemian=4">修改密码</a></li>
	<li><a href="index.php?yemian=5">留言查看</a></li>
	<li><a href="index.php?yemian=6">类型添加</a></li>
</ul>
</div>
<div class="youc">
<?php
	if($yemian==1)
	{
		include('tianjia.php');
	} 
	else
	{
		if($yemian==2)
		{
			include('2.php');
		}
		else
		{
			if($yemian==3)
			{
				include('3.php');
			}
			else
			{
				if($yemian==4)
				{
					include('4.php');
				}
				else
				{
					if($yemian==5)
					{
						include('5.php');
					}
					else
					{
						include('6.php');
					}
				}
			}
		}
	}
	?>
</div>
</body>
</html>
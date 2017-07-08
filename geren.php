<?php
include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="geren.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php 
if(empty($_SESSION['uname']))
{
	echo "<script type='text/javascript'>";
	echo "alert('请先登录');";
	echo "window.location.href='index.php';";
	echo "</script>";
}
?>
<?php
include('head.php');?>
<div class="geren">
	<ul>
		<li><a href="updateziliao.php">修改资料</a></li>
		<li><a href="updatepass.php">修改密码</a></li>
		<li><a href="tuichu.php">退出</a></li>
	</ul>
</div>
<div class="dd">
	<table class="table">
		<tr>
			<td>订单号</td>
			<td>商品名</td>
			<td>用户名</td>
			<td>地址</td>
			<td>时间</td>
			<td>电话</td>
			<td>价值</td>
		</tr>
		<?php
		$cname=$_SESSION['uname'];
		$sql="select * from orders where order_user='$cname'";
		$r=mysql_query($sql);
		while($result=mysql_fetch_array($r))
		{?>
	<tr>
		<td><?php echo $result['order_id'];?></td>
		<td><?php echo $result['p_id'];?></td>
		<td><?php echo $result['order_user'];?></td>
		<td><?php echo $result['order_adress'];?></td>
		<td><?php echo $result['order_time'];?></td>
		<td><?php echo $result['order_phone'];?></td>
		<td><?php echo $result['order_sum'];?></td>
	</tr>

			<?php } 
		?>
	</table>
</div>
</body>
</html>
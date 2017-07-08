<?php include 'conn.php';
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
else{
	$id=$_GET['id'];
	$sql="select * from product where p_id='$id'";
	$r=mysql_query($sql);
	$result=mysql_fetch_array($r);
	$cname=$_SESSION['uname'];
	$sql="select * from customer where c_name='$cname'";
	$r=mysql_query($sql);
	$user=mysql_fetch_array($r);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>订单页</title>
	<link rel="stylesheet" type="text/css" href="goumai.css">
</head>
<body>
<div class="gm">
	<div><h3>订单表</h3></div>
	<div>用户名：<?php echo $user['c_name'];?></div>
	<div>电话：<?php echo $user['c_phone'];?></div>
	<div>地址：<?php echo $user['c_address'];?></div>
	<div>商品名称：<?php echo $result['p_name'];?></div>
	<div>价格：<?php echo $result['p_price'];?></div>
	<div class="qr">
	<a href="goumaiok.php?id=<?php echo $id;?>">确认</a>
	</div>
	<div class="qr"><a href="index.php">取消</a></div>
</div>
</body>
</html>
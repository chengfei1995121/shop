<?php
include 'conn.php';
$id=$_GET['id'];
$sql="select * from product where p_id='$id'";
$r=mysql_query($sql);
$result=mysql_fetch_array($r);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" type="text/css" href="xq.css">
</head>
<body>
<?php include("head.php");?>
<div class="xq">
	<img src="<?php echo $result['p_image'];?>">
	<div class="js">
		<div class="title"><?php echo $result['p_name'];?></div>
		<div class="jg">价格：<?php echo $result['p_price'];?></div>
		<div class="sl">数量：<?php echo $result['p_quantity'];?></div>
		<div class="lianjie"><a href="goumai.php?id=<?php echo $id;?>">立即购买</a></div>
		<div class="lianjie"><a href="gouwuche.php?id=<?php echo $id;?>">加入购物车</a></div>
	</div>
	<div class="ms"><?php echo $result['p_description'];?></div>
</div>
</body>
</html>
<?php include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="gwc.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php include('head.php');?>
<div class="gwc">
<?php 
if(empty($_SESSION['uname']))
{
	echo "<script type='text/javascript'>";
	echo "alert('请先登录');";
	echo "window.location.href='index.php';";
	echo "</script>";
}
else{
	$cname=$_SESSION['uname'];
	$sql="select * from cat,product where uname='$cname' and cat.p_id=product.p_id";
	$re=mysql_query($sql);
	while($result=mysql_fetch_array($re)){
		?>
<div class="one">
	<img src="<?php echo $result['p_image'];?>">
	<div class="name"><a href="xq.php?id=<?php echo $result['p_id'];?>"><?php echo $result['p_name'];?></a></div>
	<div class="name">数量：<?php echo $result['number'];?></div>
	<div class="name2"><a href="catdelete.php?id=<?php echo $result['catid'];?>">删除</a></div>
</div>
<?php }
}
?>
</div>
</body>
</html>
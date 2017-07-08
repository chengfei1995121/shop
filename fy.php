<?php include("conn.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>分页显示</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" type="text/css" href="fy.css">
	<link rel="stylesheet" type="text/css" href="shopstyle.css">
</head>
<body>
<?php include("head.php");?>
<div class="kj">
<div class="content">
<?php 
if(empty($_GET['page'])==0)
{
	$spage=$_GET['page'];
}
else
	$spage=1;
if($spage<=0)
	$spage=1;
$page=4;
$sql="select count(*) from product where p_is_discount=0";
$r=mysql_query($sql);
$zs=mysql_fetch_array($r);
$page_c=ceil($zs[0]/$page);
if($spage>$page_c)
	$spage=$page_c;
$start=($spage-1)*$page;
$end=$page;
$sql="select * from product where p_is_discount=0 limit $start,$end";
$r=mysql_query($sql);
while($resutl=mysql_fetch_array($r))
{
?>
		<div class="hang">
			<img src="<?php echo $resutl['p_image'];?>">
			<div class="title"><a href="xq.php?id=<?php echo $resutl['p_id'];?>"><?php echo $resutl['p_name'];?></a></div>
			<div class="ms"><?php echo substr($resutl['p_description'],0,180);?>....</div>
		</div>
<?php
}
?>
		<div class="fy">
			<div class="kuang"><a href="fy.php?page=<?php echo 1;?>">首页</a></div>
			<div class="kuang"><a href="fy.php?page=<?php echo $spage-1;?>">上一页</a></div>
			<div class="kuang"><a href="fy.php?page=<?php echo 1;?>">1</a></div>
			<div class="kuang"><a href="fy.php?page=<?php echo 2;?>">2</a></div>
			<div class="kuang"><a href="fy.php?page=<?php echo 3;?>">3</a></div>
			<div class="kuang"><a href="fy.php?page=<?php echo 4;?>">4</a></div>
			<div class="kuang"><a href="fy.php?page=<?php echo $spage+1;?>">下一页</a></div>
			<div class="kuang"><a href="fy.php?page=<?php echo $page_c;?>">尾页</a></div>
		</div>
	</div>
	</div>
</body>
</html>
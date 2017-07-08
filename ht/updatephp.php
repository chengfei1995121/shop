<?php
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="htindex.css">
</head>
<body>
<?php
$id=$_GET['id'];
$sql="select * from product where p_id=$id";
$r=mysql_query($sql);
while($result=mysql_fetch_array($r))
{
	?>
	<div>
		<form method="post" action="updatephp_ok.php" style="margin-left: 500px;margin-top: -15px;position: relative;top: 50px;" class="form-horizontal">
			<div class="form-group">
				<label class="control-label">商品编号：</label>
				<div class="controls">
					<input type="text" name="pid" class="scanf" value="<?php echo $result['p_id'];?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品名称：</label>
				<div class="controls">
					<input type="text" name="pname" class="scanf" value="<?php echo $result['p_name'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品数量：</label>
				<div class="controls">
					<input type="text" name="pc" class="scanf" value="<?php echo $result['p_quantity'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">添加时间：</label>
				<div class="controls">
					<input type="datetime-local" name="ptime" class="scanf">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品价格：</label>
				<div class="controls">
					<input type="text" name="pprice" class="scanf" value="<?php echo $result['p_price'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品简介：</label>
				<div class="controls">
					<textarea name="pin" rows="10" cols="50" value="<?php echo $result['p_description'];?>"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="margin-left: 200px;margin-top: 40px;">提交</button>
			<button type="reset" class="btn btn-primary" style="margin-left: 30px;margin-top: 40px;">重置</button>
		</form>
	</div>
	<?php
}
?>
</body>
</html>
<?php include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>修改资料</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="htstyle.css">
</head>
<body>
<form enctype="multipart/form-data" method="post" action="updateziliao_ok.php" style="margin-left: 500px;margin-top: -15px;position: relative;top: 50px;" class="form-horizontal">
<?php 
$uname=$_SESSION['uname'];
$sql="select * from customer where c_name='$uname'";
$r=mysql_query($sql);
$result=mysql_fetch_array($r);
?>
			<div class="form-group">
				<label class="control-label">用户名：</label>
				<div class="controls">
					<input type="text" name="uname" class="scanf" value="<?php echo $result['c_name'];?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">邮箱：</label>
				<div class="controls">
					<input type="email" name="email" class="scanf" value="<?php echo $result['c_email'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">电话：</label>
				<div class="controls">
					<input type="text" name="phone" class="scanf" value="<?php echo $result['c_phone'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">问题：</label>
				<div class="controls">
					<input type="text" name="wenti" class="scanf" value="<?php echo $result['c_question'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">答案：</label>
				<div class="controls">
					<input type="text" name="daan" class="scanf" value="<?php echo $result['c_answer'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">地址：</label>
				<div class="controls">
					<input type="text" name="address" class="scanf" value="<?php echo $result['c_address'];?>">
				</div>
			</div>
			<button type="submit" style="margin-left: 230px; margin-top: 20px;" class="btn btn-default">提交</button>
			</form>
</body>
</html>
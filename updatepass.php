<?php include('conn.php');
session_start();
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
</head>
<body>
<?php include("head.php");?>
	<form enctype="multipart/form-data" method="post" action="updatepassok.php" style="margin-left: 500px;margin-top: -15px;position: relative;top: 50px;" class="form-horizontal">
		<div class="form-group">
		<label class="control-label">旧密码：</label>
			<div class="controls">
				<input type="text" name="opassword" class="scanf">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">新密码：</label>
			<div class="controls">
				<input type="text" name="password" class="scanf">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">确认密码：</label>
			<div class="controls">
				<input type="password" name="" class="scanf">
			</div>
		</div>
		<button type="submit" class="btn btn-default">提交</button>
	</form>
</body>
</html>
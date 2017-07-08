<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>联系我们</title>
	<style type="text/css">
		.form{
			width: 700px;
			margin:auto;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php include('head.php');?>
<div>
	<form method="post" action="concentok.php" class="form">
		<textarea type='text' name='liuyan' class="form-control" rows="15" placeholder="请输入留言信息"></textarea>
		<button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px;
			margin-left: 250px;">提交</button>
		<button type="reset" class="btn btn-default btn-lg" style="margin-top: 20px;
			margin-left: 50px;">重置</button>
	</form>
</div>
</body>
</html>
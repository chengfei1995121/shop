<div class="modal fade tp" id="Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
  	<div class="modal-header">
  		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  		<h4 class="modal-title ct" id="myModalLabel">登录</h4>
  	</div>
    <div class="modal-body">
        	<form class="form-horizontal" role="form">
        	<div class="form-group">
        		<label for="inputEmail" class="col-sm-2 control-label">Email</label>
        		<div class="col-sm-10">
        		<input type="email" class="form-control" id="inputEmail" placeholder="Email">
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
   				 <div class="col-sm-10">
      			<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    			</div>
        	</div>
        	<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<div class="checkbox">
       			<label>
         			 <input type="checkbox">记住我
       			</label>
       			<div class="aright">
   				<a href="#">忘记密码</a>
   				</div>
      			</div>
   				</div>
 			</div>
  			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>
    			</div>
  			</div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		<!--注册模拟框-->
<div class="modal fade tp" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-didden="true">
					&times;
				</button>
				<h4 class="modal-title ct" id="myModalLabel">欢迎注册</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="col-sm-2 control-label">用户名</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="用户名">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								手机号
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="mobile number">
							</div>
						</div>
  						<div class="form-group">
   							 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
      							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    						</div>
  						</div>
  				<div class="form-group">
    				<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
    				<div class="col-sm-10">
      					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    				</div>
  				</div>
  				<div class="form-group">
  					<label class="col-sm-2 control-label">确认密码</label>
  					<div class="col-sm-10">
  						<input type="password" class="form-control" placeholder="Password">
  					</div>
  				</div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary btn-block">同意协议并注册</button>
    </div>
  </div>
</form>

</div>
</div><!--header-->
</div><!--content-->
</div><!--dialog-->
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" id="shangcheng">商城</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					<li class="active"><a href="index.php">首页<span class="sr-only">(current)</span></a></li>
					<li><a href="#">分类</a></li>
					<li><a href="gwc.php">购物车</a></li>
					<li><a href="geren.php">个人中心</a></li>
					<li><a href="concent.php">联系我们</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">搜索</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#Login" id="dll">登录</a></li>
					<li><a href="#" data-toggle="modal" data-target="#signUp" id="zcc">注册</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
  <?php 
if(!empty($_SESSION['uname']))
{
   echo "<script type='text/javascript'>
  var c=1;
  </script>";
}
else
{
echo "<script type='text/javascript'>
  var c=0;
  </script>";
}
?>
  <script type='text/javascript'>
  if(c==1){
  var a=document.getElementById('dll')
    a.style.display='none';
    var b=document.getElementById('zcc');
    b.style.display='none';
  }
  </script>
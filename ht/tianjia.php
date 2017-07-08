<?php $sql="select * from main_type";
$r=mysql_query($sql);
?>
<form method="post" action="addproduct.php" class="form-horizontal" style="width: 600px;margin-left: 200px;">
			<div class="form-group">
				<label class="control-label">商品编号：</label>
				<div class="controls">
					<input type="text" name="pid" class="scanf">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品名称：</label>
				<div class="controls">
					<input type="text" name="pname" class="scanf">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品图片：</label>
				<div class="controls">
					<input type="text" name="pimg" class="scanf">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品数量：</label>
				<div class="controls">
					<input type="text" name="pc" class="scanf">
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
					<input type="text" name="pprice" class="scanf">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品简介：</label>
				<div class="controls">
					<textarea name="pin" rows="10" cols="50"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">商品类型：</label>
				<div class="controls">
					<select name="ptype">
					<?php 
					while($result=mysql_fetch_array($r)){
						?><option value="<?php echo $result['t_id'];?>"><?php echo $result['t_type'];?></option>
					<?php }	?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">是否折扣：</label>
				<div class="controls">
					<select name='zhekou'>
						<option value='0'>否</option>
						<option value='1'>是</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">折扣率：</label>
				<div class="controls">
					<input type="text" name="zhekoulv">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="margin-left: 200px;margin-top: 40px;">提交</button>
			<button type="reset" class="btn btn-primary" style="margin-left: 40px;margin-top: 40px;">重置</button>
		</form>
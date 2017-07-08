<table class="table table-bordered">
	<tr class="warning">
		<td>留言用户</td>
		<td>留言信息</td>
		<td>留言时间</td>
		<td>操作</td>
	</tr>
</table>
	<?php
	$sql="select * from idea order by id  limit 20";
	$re=mysql_query($sql);
	while($result=mysql_fetch_array($re))
	{
		?>
		<table class="table table-bordered">
			<tr class="success">
				<td><?php echo $result['c_name'];?></td>
				<td><?php echo $result['new_message'];?></td>
				<td><?php echo $result['new_time'];?></td>
				<td><a href="#">回复</a></td>
				<td><a href="ly.php?id=<?php echo $result['id'];?>">删除</a></td>
			</tr>
		</table>
	<?php }
<table class="table table-bordered">
	<tr class="warning">
		<td>订单编号</td>
		<td>商品号</td>
		<td>商品价格</td>
		<td>商品数量</td>
		<td>购买人</td>
	</tr>
</table>
	<?php
	$sql="select * from orderdetails where 1 order by p_id  limit 20";
	$re=mysql_query($sql);
	while($result=mysql_fetch_array($re))
	{
		?>
		<table class="table table-bordered">
			<tr class="success">
				<td><?php echo $result['order_id'];?></td>
				<td><?php echo $result['p_id'];?></td>
				<td><?php echo $result['p_price'];?></td>
				<td><?php echo $result['p_number'];?></td>
				<td><?php echo $result['uname'];?></td>
				<td><a href="querenorder.php?id=<?php echo $result['order_id'];?>">确认</a></td>
				<td><a href="deleteorder.php?id=<?php echo $result['order_id'];?>">删除</a></td>
			</tr>
		</table>
	<?php }?>
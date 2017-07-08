<table class="table table-bordered">
	<tr class="warning">
		<td>商品编号</td>
		<td>商品名称</td>
		<td>价格</td>
		<td>数量</td>
		<td>商品类型</td>
		<td>是否打折</td>
		<td>折扣率</td>
		<td>操作</td>
	</tr>
</table>
	<?php
	$sql="select * from product,main_type where t_id=p_type order by p_id  limit 20";
	$re=mysql_query($sql);
	while($result=mysql_fetch_array($re))
	{
		?>
		<table class="table table-bordered">
			<tr class="success">
				<td><?php echo $result['p_id'];?></td>
				<td><?php echo $result['p_name'];?></td>
				<td><?php echo $result['p_price'];?></td>
				<td><?php echo $result['p_quantity'];?></td>
				<td><?php echo $result['t_type'];?></td>
				<td><?php echo $result['p_is_discount'];?></td>
				<td><?php echo $result['P_discount'];?></td>
				<td><a href="updatephp.php?id=<?php echo $result['p_id'];?>">修改</a></td>
				<td><a href="productdel.php?id=<?php echo $result['p_id'];?>">删除</a></td>
			</tr>
		</table>
	<?php }
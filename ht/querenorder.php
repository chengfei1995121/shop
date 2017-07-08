<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include 'conn.php';
session_start();
?>
<?php 
$order_id=$_GET['id'];
$sql="select * from orderdetails where order_id='$order_id'";
$r=mysql_query($sql);
$result=mysql_fetch_array($r);
$uname=$result['uname'];
$sql="select * from customer where c_name='$uname'";
$r=mysql_fetch_array(mysql_query($sql));
$order_id=$result['order_id'];
$c_address=$r['c_address'];
$c_phone=$r['c_phone'];
$c_name=$r['c_name'];
$p_price=$result['p_price'];
$p_id=$result['p_id'];
$sql="insert into orders(order_id,order_adress,order_phone,order_user,order_time,order_sum,p_id) values('$order_id','$c_address','$c_phone','$c_name',now(),$p_price,'$p_id')";
$rr=mysql_query($sql);
if($rr)
{
$sql="delete from orderdetails where order_id='$order_id'";
$rrr=mysql_query($sql);
	echo "<script type='text/javascript'>";
	echo "alert('确认成功');";
	echo	"window.location.href='index.php?yemian=3';";
	echo "</script>";	
}
else{
	echo "<script type='text/javascript'>";
	echo "alert('确认失败');";
	echo	"window.location.href='index.php?yemian=3';";
	echo "</script>";
}
?>
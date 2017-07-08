<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include ("../conn.php");
session_start();
?>
<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pimg=$_POST['pimg'];
$pc=$_POST['pc'];//数量
$ptime=$_POST['ptime'];
$pprice=$_POST['pprice'];
$pin=$_POST['pin'];
$ptype=$_POST['ptype'];
$pzhekou=$_POST['zhekou'];
$pzhekoulv=$_POST['zhekoulv'];
$sql="insert into product(p_id,p_type,p_name,p_price,p_image,p_quantity,p_time,p_description,p_is_discount,P_discount) values('$pid','$ptype','$pname','$pprice','$pimg','$pc','$ptime','$pin','$pzhekou','$pzhekoulv')";
$r=mysql_query($sql);
if($r)
{
	echo "<script type='text/javascript'>";
	echo "alert('添加成功');";
	echo	"window.location.href='index.php';";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('添加失败');";
	echo	"window.location.href='index.php';";
	echo "</script>";
}
?>
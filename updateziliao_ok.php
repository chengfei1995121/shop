<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include 'conn.php';
?>
<?php
$uname=$_POST['uname'];
$eamil=$_POST['email'];
$phone=$_POST['phone'];
$wenti=$_POST['wenti'];
$daan=$_POST['daan'];
$address=$_POST['address'];
$sql="update customer set c_email='$eamil',c_phone='$phone',c_question='$wenti',c_answer='$daan',c_address='$address' where c_name='$uname'";
$r=mysql_query($sql);
if($r)
{
echo "<script type='text/javascript'>";
echo "alert('修改成功');";
echo	"window.location.href='geren.php';";
echo "</script>";
}
else{
echo "<script type='text/javascript'>";
echo "alert('修改失败');";
echo	"window.location.href='geren.php';";
echo "</script>";
}
?>
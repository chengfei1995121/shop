<?php include 'conn.php';
session_start();
?>
<?php 
$_SESSION['aname']='';
echo "<script type='text/javascript'>";
	echo "alert('退出成功');";
	echo	"window.location.href='admin_log_in.html';";
	echo "</script>";
?>
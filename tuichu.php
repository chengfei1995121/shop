<?php
include("conn.php");
session_start();
?>
<?php
unset($_SESSION['uname']);
echo "<script type='text/javascript'>";
	echo "window.location.href='index.php';";
	echo "</script>";
?>
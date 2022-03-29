<?php
session_start();
if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:t_home.php");
}
else{header("location:t_home.php");}
 ?>

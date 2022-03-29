
	

<?php
session_start();
if(isset($_SESSION['username']))
{
  session_destroy();
  header('location:../i_login_view.php');
}
else
{
  header("location:../i_login_view.php");
}
 ?>



<?php
session_start();
if(isset($_SESSION['username']))
{
  session_destroy();
  header('location:a_login.php');
}
else
{
  header("location:a_login.php");
}
 ?>

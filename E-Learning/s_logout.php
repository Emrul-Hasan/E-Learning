<?php
session_start();

if(isset($_SESSION['username']))
{
  session_destroy();
  header('location:s_login.php');
}

else
{
  header('location:s_login.php');
}
?>

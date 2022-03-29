<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
  <?php require_once 'js/js-login.php'; ?>
<style>
  /*create a form box*/
  .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 400px;
    margin: 100px auto 100px;
    padding: 10px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }

</style>
</head>
<body>

<?php

session_start();

 if(!isset($_SESSION['nameErr']))
 {
   $_SESSION['nameErr']="";
 }

 if(!isset($_SESSION['passwordErr']))
 {
   $_SESSION['passwordErr']="";
 }

 $name=$password="";

  ?>
<div class="topnav">
 
  <div style="float: right;">
  
</div>
 
<div class="form">
<form  method="post" enctype="multipart/form-data" action="controller/a_login.php" onsubmit="validateform()"> 
<h2 style="font-size: 50px;">Login</h2>
  <hr>
  User Name: 
  <input type="text" size= "30" name="name" placeholder="Enter your name" id="name" onkeyup="myFunction1()"  onmousedown="myFunction1()"   onkeypress="checkName()" onblur="checkName()" >
  	 <br> <span class="error" id="nameErr" ><?php echo $_SESSION['nameErr'];?></span><br><br>

  Password:
  <input type="password" size="30" name="password" placeholder="Enter your password" id="password" onkeyup="myFunction2()" onmousedown="myFunction2()" onkeypress="checkPassword()" onblur="checkPassword()">
  <br><span class="error" id="passwordErr"><?php echo $_SESSION['passwordErr'];?></span><br>
  <br>
  <hr>
  
  <input  type="checkbox"  name="remember" value="remembered">
  <label for="remember">Remember Me</label><br><br>
  <input type="submit" name="submit" value="Submit" size="30">&nbsp;
  <a href="ForgotPassword.php" class="active" style="font-size: 17px;color: #4169E1;">Forgot password?</a><br><br><br>
  <p style="font-style: italic;font-size: 15px;">Don't have an account?&nbsp;<a href="RegistrationForm.php" class="active" style="font-size: 15px;color: #4169E1;">Sign Up</a></p> 
</form></div><br>


</body>
</html>
<?php
if(isset($_SESSION['passwordErr']) || isset($_SESSION['passwordErr']))
 {
 session_destroy();
 }

  ?>
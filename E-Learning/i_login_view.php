<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php require_once 'js/js-login.php'; ?>
	<style type="text/css">
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
	<div class="container" style="margin: 80px auto 100px; " >
  		<div class="row" align="center" >
    		<div class="col-12" >
				<div class="card" style="width: 20rem; border-width: 5px;" align="center " >
  					<img class="card-img-top" src="asset/i_img/p-1.png" height="200" width="100">
  					<div class="card-body" style="background-color: #BADBE1" align="center">
    					<h4 style="color:#201772" class="card-title"><b>LOG IN</b></h4>
                          <form action="controller/i_login_controller.php" method="POST" enctype="multipart/form-data"                        onsubmit="validateform()">					    
						   
						   <b>Username: </b>
						    <input type="text" size= "25" name="name" placeholder="Username" value="<?php echo $name;?>" id="name" onkeyup="myFunction1()"  onmousedown="myFunction1()" onkeypress="checkName()" onblur="checkName()"     >			
						    <br> <span id="nameErr" > <?php echo $_SESSION['nameErr'];?></span><br>
							
						    <b>Password:</b>
					     	<input type="password" size="25" name="password" placeholder="Password" value="<?php echo $password;?>" id="password"  onkeyup="myFunction2()" onmousedown="myFunction2()" onkeypress="checkPassword()" onblur="checkPassword()" >*
							<br><span id="passwordErr" > <?php echo $_SESSION['passwordErr'];?></span><br>
							
					  	    <input  type="checkbox"  name="remember" value="remembered">
         				    <label for="remember">Remember Me</label><br>
							
							<input type="submit" name="submit" value="Login" >
                          </form>
    					 <a href="" class="active" style="color: #4169E1;">Forgot password?</a><br>
  						<p style="font-style: italic;">Don't have an account?<a href="i_registration_view.php" class="active" style="color: #4169E1;">Sign Up</a></p> 
  					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
<?php
if(isset($_SESSION['passwordErr']) || isset($_SESSION['passwordErr']))
 {
 session_destroy();
 }

  ?>
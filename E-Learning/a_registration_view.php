<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php require_once 'js/js-registration.php'; ?>
	<style type="text/css">
	</style>
</head>

<body>
<?php



 if(!isset($_SESSION['nameEr']))
 {
   $_SESSION['nameEr']="";
 }

 if(!isset($_SESSION['passwordEr']))
 {
   $_SESSION['passwordEr']="";
 }


 
 if(!isset($_SESSION['usernameErra']))
 {
   $_SESSION['usernameErra']="";
 }

 if(!isset($_SESSION['cpasswordErr']))
 {
   $_SESSION['cpasswordErr']="";
 }
 if(!isset($_SESSION['contactnoErr']))
 {
   $_SESSION['contactnoErr']="";
 }

 if(!isset($_SESSION['emailErr']))
 {
   $_SESSION['emailErr']="";
 }
$name = $email =  $contactno="";
  $username=$password="";
 $confirmpassword="";


  ?>
	<div class="container" style="margin: 80px auto 100px; " >
  		<div class="row" align="center" >
    		<div class="col-12" >
				<div class="card" style="width: 20rem; border-width: 5px;" align="center " >
  					
  					<div class="card-body" style="background-color: #BADBE1" align="center">
					 <form action="controller/a_registration_controller.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()">

    					<h4 style="color:#201772" class="card-title"><b>Add instructor</b></h4>
    					<b>Name:</b>
					  	<input type="text" size="25" name="name" placeholder="Enter your name" id="name" onkeyup="checkName()" onblur="checkName()">
						<br> <span id="nameErr" >* <?php echo $_SESSION['nameEr'];?></span><br>
					  	<br>

					    <b>User Name : </b>
						<input type="text" size= "25" name="username" placeholder="Enter your user-name" id="username" onkeyup="checkUserName()" onblur="checkUserName()">
						<br> <span id="usernameErr" >* <?php echo $_SESSION['usernameErra'];?></span><br>
						<br>

						<b>E-mail:</b>
					  	<input type="e-mail" size="25" name="email" placeholder="Enter your e-mail" id="email" onkeyup="checkEmail()" onblur="checkEmail()">
						<br> <span id="emailErr" >* <?php echo $_SESSION['emailErr'];?></span><br>
					  	<br>

					  	<b>Contact No :</b>
					  	<input type="contact-no" size="25" name="contactno" placeholder="Enter your contact-no" id="contactno" onkeyup="checkContactno()" onblur="checkContactno()">
						<br> <span id="contactnoErr" >* <?php echo $_SESSION['contactnoErr'];?></span><br>
					  	<br>
					  	
  						<b>Password :</b>
					  	<input type="password" size="25" name="password" placeholder="Enter your password" id="password"  onkeyup="checkPass()" onblur="checkPass()">
						<br> <span id="passErr" >* <?php echo $_SESSION['passwordEr'];?></span><br>
					  	<br>

						<b>Confirm Password :</b>
					  	<input type="password" size="25" name="confirmpassword" placeholder="Confirm password" id="confirmpassword"  onkeyup="checkConfirmpassword()" onblur="checkConfirmpassword()">
						<br> <span id="confirmpasswordErr" >* <?php echo $_SESSION['cpasswordErr'];?></span><br>
					  	<br><br>

    					 <input type="submit" name="submit" value="Add"> 	<br><br>
    					  <a href="a_instructor.php">Go back</a>
						    
						  </div>
						  <form>
  					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
<?php
if(isset($_SESSION['usernameErra']) || isset($_SESSION['passwordEr']))
 {
 $_SESSION['usernameErra']=$_SESSION['passwordEr']="";
 }

  ?>
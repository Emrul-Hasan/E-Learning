<!DOCTYPE HTML>  
<html>
  <head >
  <title>LOGIN</title>
   <?php require_once 'js/js-login.php'; ?>
    </head >
    <body> 
    	<fieldset style="background-color: #C1E483">
		      <br><i> <h1 align="center" style="color: blue">  LEARNING CS </i> </h1> 
		      <h3 align= "right">
			 
			  
		      <a href="s_home page.php">Home |  </a> 
		      <a href="s_login.php">Login |  </a>  
		      <a href="s_registration.php">Registration </a>
			  <hr>
		      </h3>  	
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
		  <h3 align="center">
		  <legend> <h2> <b>LOGIN</b></h2></legend><br>
          <form action="controller/s_loginController.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()"> 
		  
		  
		       <b> <label for="username"> UserName <span style="color: #C1E483;">****</span> : </label> </b>
			   <input type="text" name="name" placeholder="Username" id="name" onkeyup="myFunction1()"  onmousedown="myFunction1()" onkeypress="checkName()" onblur="checkName()"   >
			    <span  style="color: #ff0000" id="nameErr">* <?php echo $_SESSION['nameErr'];?></span><br><br>
			  
			    <b> <label for="password"> Password <span style="color: #C1E483;">*****</span>: </label> </b>
                <input type="password" name="password" placeholder="Password" id="password" onkeyup="myFunction2()" onmousedown="myFunction2()" onkeypress="checkPassword()" onblur="checkPassword()">
				<span  style="color: #ff0000" id="passwordErr">* <?php echo $_SESSION['passwordErr'];?></span><br>
                <hr>
				
				
                <input type="checkbox" name="rememberMe"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit"> 				
				<a href="forgotPassword.php">Forgot Password?</a>
                
			</h3>	
				
							    
		   <div align="center">
		   <hr>
		   
		   
		   <p> <span style="color: rgb(140, 140, 140);"> Copyright ©   <?php echo date(2021);?> <span/> </p>
		    
			
		   </div>
 		
         </form> <br><br>
				
  
	 </fieldset>
 </body>
</html>
<?php
if(isset($_SESSION['passwordErr']) || isset($_SESSION['passwordErr']))
 {
 session_destroy();
 }

  ?>
<?php session_start(); ?> 
<!DOCTYPE HTML>  
<html>
  <head >
  <title>Registration </title>
  <?php require_once 'js/js-registration.php'; ?>
    </head >
    <body>
    	<fieldset style="background-color: #CAF6F5">
    		
    	
		      <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			      
		     <a href="t_home.php">  Home ||  </a> 
		       <a href="t_login.php">  Login || </a>  
		       <a href="t_registration.php">  Registration </a>
		   </h3>  	


<?php



 if(!isset($_SESSION['nameEr']))
 {
   $_SESSION['nameEr']="";
 }

 if(!isset($_SESSION['passwordEr']))
 {
   $_SESSION['passwordEr']="";
 }


 
 if(!isset($_SESSION['usernameErr']))
 {
   $_SESSION['usernameErr']="";
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
           <br />  
                           
                <form align="center" action="controller/t_registration.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()"> 
                     <fieldset>	
                     <legend>Registration </legend>					                    
                     <br />  

					  <label>Name:</label>  
                     <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"> <br> 
                    
 <span class="error" id="nameErr" >* <?php echo $_SESSION['nameEr'];?></span><br>		<br>	

                     <label>Email:</label>  
                     <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()"><br>	
 <span class="error" id="emailErr">* <?php echo $_SESSION['emailErr'];?></span><br>	<br>

					  <label>Contactno:</label>  
                     <input type="text" name="contactno" id="contactno" onkeyup="checkContactno()" onblur="checkContactno()"><br>
 <span class="error" id="contactnoErr">* <?php echo $_SESSION['contactnoErr'];?></span><br><br>

					  <label>Username:</label>  
                     <input type="text" name="username" id="username" onkeyup="checkUserName()" onblur="checkUserName()"> <br>
 <span class="error" id="usernameErr">* <?php echo $_SESSION['usernameErr'];?></span><br>	<br>

					 <label>Password:</label>  
                     <input type="password" name="password" id="password"  onkeyup="checkPass()" onblur="checkPass()" > <br>
 <span class="error" id="passErr">* <?php echo $_SESSION['passwordEr'];?></span><br>	<br>

					 <label>Confirm Password:</label>  
                     <input type="password" name="confirmpassword"  id="confirmpassword"  onkeyup="checkConfirmpassword()" onblur="checkConfirmpassword()"> <br>
 <span class="error" id="confirmpasswordErr">* <?php echo $_SESSION['cpasswordErr'];?></span><br>	<br>				 
                    
                  
                      <br>					  
					  <input type="submit" name="submit" value="Append" class="btn btn-info" />    
					  
					  
					  				    	      					   
					  </fieldset>
                </form>  
            
           <br />  
           </fieldset>
      </body>  
 </html>  
 <?php
if(isset($_SESSION['passwordEr']) || isset($_SESSION['passwordEr']))
 {
 session_destroy();
 }

  ?>
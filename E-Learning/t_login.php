<!DOCTYPE HTML>  
<html>
  <head >
  <title>login</title>
  <?php require_once 'js/js-login.php'; ?>
    </head >
    <body> 
      <fieldset style="background-color: #CAF6F5">
		    <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			      <hr>
		      <a href="t_home.php">  Home ||  </a> 
		       <a href="t_login.php">  Login ||  </a>  
		       <a href="t_registration.php">  Registration </a>
		   </h3>  	
       </fieldset>
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
		  <fieldset style="background-color: #CAF6F5">
		  <h1>Login</h1>
          <form action="controller/t_login.php" method="POST" onsubmit="validateform()" enctype="multipart/form-data"> 
		  
		  
		       <b> <label for="username"> Username : </label> </b>
			   <input type="text" name="name" id="name"  onkeyup="myFunction1()"  onmousedown="myFunction1()" onkeypress="checkName()" onblur="checkName()" >	
               <span id="nameErr"> <?php echo $_SESSION['nameErr'];?></span><br>			   
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" id="password" onkeyup="myFunction2()" onmousedown="myFunction2()" onkeypress="checkPassword()" onblur="checkPassword()" >  
				<span  id="passwordErr"> <?php echo $_SESSION['passwordErr'];?></span><br>
                <br><br>
				
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit"> 				
               			
							
         </form> <br><br>
				
            </fieldset>            		
         </form> 
	 
    </body>
</html>
<?php
if(isset($_SESSION['passwordErr']) || isset($_SESSION['passwordErr']))
 {
 session_destroy();
 }

  ?>
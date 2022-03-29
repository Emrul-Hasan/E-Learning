<!DOCTYPE HTML>  
<html>
  <head>
  <title>FORGOT PASSWORD</title>
   <style>
     .error {color: #FF0000;}
    </style>
    </head >
    <body> 
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			  
			  
		      <a href="home page.php">Home | </a> 
		      <a href="login.php">Login | </a>  
		      <a href="registration.php">Registration </a>
			  <hr>
	          </h3>
   <?php
           
        $emailErr =  " ";
        $email =  " "; 
		

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
             
  
            if(empty($_POST["email"])) 
		    {
                $emailErr = "Email is required!";
            } 
		   else 
		   {
               $email = test_input($_POST["email"]);
	  
             // check if e-mail address is well-formed
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailErr = "Invalid email format and must be in anything@example.Com! ";
               }
            }
    
	
	        
        }


        function test_input($data) 
		{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

          <h3 align="center">
		  
		  <legend> <h2> <b> FORGOT PASSWORD </b></h2></legend>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		  <br> <br>
			 
			
			  
			    <p align="center">
				
			    <b> <label for="email"> Enter Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span>
                <br><br>
                
				
                <input type="submit" name="submit" value="Submit">  
				 
			     </p>
				 
				 <hr>
		        </h3>
                		   
				<div align="center">
		       
		         <p> <span style="color: rgb(140, 140, 140);"> Copyright © <?php echo date(2021);?> <span/> </p>
			
		       </div>
 		
         </form> <br><br>
				
      </fieldset>            		
    </form> <br>
	 
    
         
    </body>
</html>
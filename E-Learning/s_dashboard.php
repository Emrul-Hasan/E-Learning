<?php

session_start();
if(isset($_SESSION['username']))	
{
?>

<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		    <fieldset style="background-color: #C1E483">
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			  
				
		      Logged in as <?php echo $_SESSION['nameDB'] ; ?>|
		      <a href="s_logout.php">Logout</a> 
              <hr>			  
		      </h3>  
			 
			
		
		   <h2> <u> Account </u> </h2>  <h1 align="center" > Welcome <?php echo $_SESSION['nameDB']; ?>  <h1/>
           
		   <h4>
		   
           <ul>
                <li><a href="s_dashboard.php"> Dashboard </a></li>
                <li><a href= "s_viewProfile.php"> View Profile </a> </li>
                <li><a href="s_editProfile.php"> Edit Profile </a></li>
                <li><a href="s_changePassword.php">Change Password </a> </li>
                 <li><a href="s_searchCourse.php">Courses</a></li>
                <li><a href="s_logout.php">Logout</a></li>
      
		    </ul> 
			 
		    </h4>
			 
		    <hr>
		
	     <div align="center">
		
		    <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> <span/> <h4/> 
			
		</div>   
		</fieldset>
		
	 </body>
	 
</html>	 
<?php

}

else
	
{ 
header("location:login.php");

}

?>
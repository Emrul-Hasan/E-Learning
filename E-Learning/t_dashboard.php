
<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html> 
	 <head>
	 
	 </head>  
	 <body>
	      <fieldset style="background-color: #CAF6F5">
		     <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo $_SESSION['nameDB']; ?>|
		       <a href="t_logout.php">Logout</a>   
		   </h3>  
		   </fieldset>

		<fieldset style="background-color: #CAF6F5">
		
		     <h1  align="center"> Welcome <?php echo $_SESSION['nameDB']; ?>  <h1/>
            <h4>
            <h2> <u> Account </u> </h2> 
            <ul>
			   <li> <a href="t_dashboard.php"> Dashboard   </a></li><hr>
                <li> <a href= "t_viewProfile.php"> View Profile </a> </li><hr>
                <li> <a href="t_editProfile.php"> Edit Profile </a></li><hr>
                <li> <a href="t_changePassword.php">Change Password</a> </li><hr>  
                <li> <a href="t_studentSearch.php">Students</a> </li></ul><hr> 
      
		     </ul>  
		     </h4>
		     

		   </fieldset>
		 
	 </body>
	 
</html>	
<?php
}
else
{ header("location:t_login.php");}
?> 
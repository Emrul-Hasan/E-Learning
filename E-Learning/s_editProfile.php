<?php
session_start();


require_once 'controller/s_viewProfileController.php';
$student = fetchProfile( $_SESSION['username']);

?>

<!DOCTYPE html>
<html> 
	 <head>
	 <title> EDIT PROFILE </title>
	 <?php require_once 'js/js-editprofile.php'; ?>
	 </head>  
	 <body>
	      
<?php



 if(!isset($_SESSION['epnameEr']))
 {
   $_SESSION['epnameEr']="";
 }


 if(!isset($_SESSION['epcontactnoErr']))
 {
   $_SESSION['epcontactnoErr']="";
 }

 if(!isset($_SESSION['epemailErr']))
 {
   $_SESSION['epemailErr']="";
 }
$epname = $epemail =  $epcontactno="";
 ?>

 			<fieldset style="background-color: #C1E483">
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			  
		       Logged in as <?php echo $_SESSION['nameDB']?>|
		       <a href="s_logout.php">Logout</a>
			   <hr>
			   
		     </h3>  
			 

	        <h2> <u> Account </u> </h2> 
		   
            <ul>
			
			    <li> <a href="s_dashboard.php">Dashboard</a></li>
                <li> <a href= "s_viewProfile.php">View Profile </a> </li>
                <li> <a href="s_editProfile.php">Edit Profile </a></li>
                <li> <a href="s_changePassword.php">Change Password</a> </li>
                <li><a href="s_searchCourse.php">Courses</a></li>
                <li> <a href="s_logout.php">Logout</a> </li>
      
		     </ul> 
			 
		     <h4/>
  
    
           <form action="controller/s_editProfileController.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()">	
           <h2 align="center"> EDIT PROFILE </h2><br>
			  
		      <h3 align="center">

					<meta><b> Name <span style="color: #C1E483;"> ******* </span>:</b> 
					  <input type :"text"  value="<?php echo $student['Name'] ?>"  name="name" id="name" onkeyup="checkName()" onblur="checkName()"></meta> 
					  <span style="color:red" id="nameErr">* <?php echo $_SESSION['epnameEr'];?></span><br><br>
					  
					  
				      <meta><b>Email <span style="color:#C1E483;"> ******* </span>: </b>
					  <input type :"text" value="<?php echo $student['Email'] ?>" name="email"  id="email" onkeyup="checkEmail()" onblur="checkEmail()"></b></meta>
					  <span style="color:red" id="emailErr">* <?php echo $_SESSION['epemailErr'];?></span><br><br>
					  
					  
				      <meta><b>ContactNo <span style="color: #C1E483;"> *** </span>:</b> 
					  <input type :"text" value="<?php echo$student['ContactNo'] ?>" name="contactno" id="contactno" onkeyup="checkContactno()" onblur="checkContactno()"></b></meta>
					  <span style="color:red" id="contactnoErr">* <?php echo $_SESSION['epcontactnoErr'];?></span><br><br>
					  
				      <input type="submit" name="submit" value="Save">
      			 </h3>
      			</form>
			  <hr>
			  
             
				 
				<div align="center">
		  
		             <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h4>
		         
	            </div>
				
         </form> <br>

    </fieldset>
    </body>
</html>
<?php

if(isset($_SESSION['epnameEr']) || isset($_SESSION['epemailErr'])   || isset($_SESSION['epcontactnoErr']) )
 {
$_SESSION['epnameEr']=$_SESSION['epemailErr']=$_SESSION['epcontactnoErr']="";
 }

  ?>
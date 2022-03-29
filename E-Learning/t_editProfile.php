<?php
session_start();


require_once 'controller/t_viewProfile.php';
$tutor = fetchProfile( $_SESSION['username']);

?>

<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
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
	      
	      <fieldset style="background-color: #CAF6F5">
		     <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo $_SESSION['nameDB']?>|
		       <a href="t_logout.php">Logout</a>   
		   </h3>  
		</fieldset>
		<fieldset style="background-color: #CAF6F5">
	      <h2> <u> Account </u> </h2> 
		   
            <ul>
			   <li> <a href="t_dashboard.php"> Dashboard   </a></li><hr>
                <li> <a href= "t_viewProfile.php"> View Profile </a> </li><hr>
                <li> <a href="t_editProfile.php"> Edit Profile </a></li><hr>
                <li> <a href="t_changePassword.php">Change Password</a> </li><hr>
            <li> <a href="t_studentSearch.php">Students</a> </li></ul><hr> </ul><hr>  
 
		     <h4/>
   
    
          <form action="controller/t_editProfile.php?id=<?php echo $_SESSION['username'] ?>" method="post" onsubmit="validateform()" enctype="multipart/form-data"> 
		  
		   
		   
		       <h1 > Edit profile </h1>
		       <p >
			   <label>Name:</label>
              <input type="text" name="name" value="<?php echo $tutor['Name']; ?> " id="name" onkeyup="checkName()" onblur="checkName()" >*
              <br>
               <span class="error" id="nameErr"><?php echo $_SESSION['epnameEr'];?></span><br>
              <label>Email:</label>
              <input type="text" name="email" value="<?php echo $tutor['Email']; ?> "  id="email" onkeyup="checkEmail()" onblur="checkEmail()">* <br>
              <span class="error" id="emailErr"> <?php echo $_SESSION['epemailErr'];?></span><br>
              <label>Contactno:</label>
              <input type="text" name="contactno" value="<?php echo $tutor['ContactNo']; ?> " id="contactno" onkeyup="checkContactno()" onblur="checkContactno()"> *<br>
            <span class="error" id="contactnoErr"><?php echo $_SESSION['epcontactnoErr'];?></span><br>
			 
			  
              <input type="submit" name="submit" value="Save">
				  <hr>
                 </p>
				 
				
		          </fieldset>
	       
				
                </form> <br>
	

    
    </body>
</html>
<?php
if(isset($_SESSION['epnameEr']) || isset($_SESSION['epemailErr'])   || isset($_SESSION['epcontactnoErr']) )
 {
$_SESSION['epnameEr']=$_SESSION['epemailErr']=$_SESSION['epcontactnoErr']="";
 }

  ?>
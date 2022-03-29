<?php
session_start();
?>

<!DOCTYPE html>
<html> <title> CHANGE PASSWORD </title>
<head><?php require_once 'js/js-changepassword.php'; ?></head>>
      <body>
	<?php



 if(!isset($_SESSION['cpasswordE']))
 {
   $_SESSION['cpasswordE']="";
 }

 if(!isset($_SESSION['npasswordE']))
 {
   $_SESSION['npasswordE']="";
 }
  if(!isset($_SESSION['rnpasswordE']))
 {
   $_SESSION['rnpasswordE']="";
 }

 $cpassword=$npassword=$rnpassword="";
 
 ?>
 <fieldset style="background-color: #C1E483">
              <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			
		        Logged in as <?php echo $_SESSION['nameDB']?> | </a>
		       <a href="s_logout.php">Logout</a>
               <hr>			   
		      </h3>  
			  
			  
		   
	      <h2> <u> Account </u> </h2> 
		  
            <ul>
			   <li>  <a href="s_dashboard.php"> Dashboard </a></li>
                <li> <a href= "s_viewProfile.php"> View Profile </a> </li>
                <li> <a href="s_editProfile.php"> Edit Profile </a></li>
                <li> <a href="s_changePassword.php">Change Password</a> </li>
                <li><a href="s_searchCourse.php">Courses</a></li>
                <li> <a href="s_logout.php">Logout</a> </li>
      
		     </ul>  
		     <h4/>


      <h3 align="center"><legend> <h2> <b>CHANGE PASSWORD </h2> </b></legend></h3><br>
	  
	  
       <form  method="post" action="controller/s_changePasswordController.php" onsubmit="validateform()">
	  
	    <h3 align="center"> </p> 
			  
		  <label>Current Password <span style="color:#C1E483;"> ******* </span>:</lebel> 
		  <input type="password" name="cpassword" id="cpassword" onkeyup="checkPass()" onblur="checkPass()">         
          <span class="error" style="color:red" id="cpassErr"> *<?php echo $_SESSION['cpasswordE'];?></span><br><br>
		  
          <label>New Password <span style="color:#C1E483;"> ********** </span></label>:
          <input type="password" name="npassword"  id="npassword" onkeyup="checkNpassword()" onblur="checkNpassword()">
		  <span class="error" style="color:red" id="npasswordErr">* <?php echo $_SESSION['npasswordE'];?></span><br><br>
		  
          <label>Retype New Password <span style="color:#C1E483;"> *** </span></label>:
          <input type="password" name="rnpassword"  id="rnpassword" onkeyup="checkRnpassword()" onblur="checkRnpassword()" >      
          <span class="error" style="color:red" id="rnpasswordErr" > *<?php echo $_SESSION['rnpasswordE'];?></span><br><br>	
		  
          <input type="submit" name="submit" value="Save">
          <hr><br>
		  
		  </h3>
		  
      </form>
      <div align="center">
		  
	  <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h4>
		    </fieldset>      	  
  </body>
</html>
<?php
if(isset($_SESSION['cpasswordE']) || isset($_SESSION['npasswordE'])   || isset($_SESSION['rnpasswordE']))
 {
 $_SESSION['cpasswordE']="";
 $_SESSION['npasswordE']="";
 $_SESSION['rnpasswordE']="";
 }

  ?>
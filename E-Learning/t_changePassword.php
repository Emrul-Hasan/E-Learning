
<?php session_start(); ?> 
<!DOCTYPE html>
<html> 
<head>
<title> Upload File </title>
<?php require_once 'js/js-changepassword.php'; ?>
</head>
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
      
      <fieldset style="background-color: #CAF6F5">
		     <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo $_SESSION['nameDB']?> | </a>
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
              <li> <a href="t_studentSearch.php">Students</a> </li></ul><hr> </ul>


    <h3 align="center"> </h3>
      
      <form  action="controller/t_changePassword.php?id=<?php echo $_SESSION['username'] ?>" method="post" onsubmit="validateform()" enctype="multipart/form-data">
	    <h3 > </p>
			  
		  <lebel>Current Password:</lebel> 
		  <input type="password" name="cpassword" placeholder="Current password" id="cpassword" onkeyup="checkPass()" onblur="checkPass()">
  <br><span class="error" id="cpassErr"> <?php echo $_SESSION['cpasswordE'];?></span>		  
          <br>
          <lebel style="color:green">New Password:</lebel>
          <input type="password" name="npassword" placeholder="New password"  id="npassword" onkeyup="checkNpassword()" onblur="checkNpassword()"> <br>
 <span class="error" id="npasswordErr"> <?php echo $_SESSION['npasswordE'];?></span>		<br>  
          
          <lebel style="color:Red">Retype New Password:</lebel>
          <input type="password" name="rnpassword" placeholder="Retype new password" id="rnpassword" onkeyup="checkRnpassword()" onblur="checkRnpassword()" >   <br> 
  <span class="error" id="rnpasswordErr"> <?php echo $_SESSION['rnpasswordE'];?></span>			  
          <br><hr>
          <input type="submit" name="submit" value="Submit">
          <br>		  
		  </h3>
      </form>		   
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

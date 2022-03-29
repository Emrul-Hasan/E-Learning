<?php
session_start();

require_once 'controller/s_viewProfileController.php';
$username=$_SESSION['username'];
$student = fetchProfile($_SESSION['username']);

?>

<html> 
	 <head>
	 <title> PROFILE </title>
	 </head>  
	 <body>



<script type="text/javascript">



  function showDetails(str) {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "controller/s_getDetailsController.php?q="+str, true);
    xhttp.send();
}

</script>






	      <fieldset style="background-color: #C1E483">
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
		
		      Logged in as <?php echo $_SESSION['nameDB']?>|
		      <a href="s_logout.php">Logout</a>  
			  <hr>
		   </h3>  
		   
		
	      <h2> <u> Account </u> </h2> 
		   
            <h4> <b>
            <ul>
               <li>  <a href="s_dashboard.php"> Dashboard   </a></li>
                <li> <a href= "s_viewProfile.php"> View Profile </a> </li>
                <li> <a href="s_editProfile.php"> Edit Profile </a></li>
                <li> <a href="s_changePassword.php">Change Password</a> </li>
                <li><a href="s_searchCourse.php">Courses</a></li>
               
		     </ul>  
		     <h4/></b>
			 
		    <h2 align="center"> PROFILE </h2><br>
			
			<h3 align="center">
		    
			
			
		      Name<span style="color: #C1E483;"> ******* </span>:
			  <?php echo $student['Name']; ?> 
			  <br><br>
			  
	          Email <span style="color: #C1E483;">**** </span>:
			  <?php echo $student['Email']; ?> 
			  <br><br>
			  
		      ContactNo<span style="color:#C1E483;"> ******** </span>:
			  <?php echo $student['ContactNo']; ?> 
			  <br><br>
			  
		      Username <span style="color: #C1E483;"> ****** </span>:
			  <?php echo $student['Username']; ?> 
			  <br><br>

			     <button type="button"  <?php echo ('onclick="showDetails(\'' . $username . '\')"');  ?> >Present Address</button>
				        <div id="txtHint" ></div>
				        <br>

			
			</h3>
		  
		   <div align="center">
		   
		    <hr>
		   
		   <h4> <span style="color: rgb(140, 140, 140);"> Copyright © <?php echo date(2021);?> </span> </h4>
		   
		   </div>

		   </fieldset>
		   
	 </body>
	 
</html>	 
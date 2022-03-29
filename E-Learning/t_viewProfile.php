<!DOCTYPE html>
<?php
session_start();
require_once 'controller/t_viewProfile.php';
$instructor = fetchProfile($_SESSION['username']);
$username=$_SESSION['username'];
?>
<html> 
	 <head>
	 <title> Dashboard </title>
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
    xhttp.open("GET", "controller/t_getDetailsController.php?q="+str, true);
    xhttp.send();
}

</script>

	      <fieldset style="background-color: #CAF6F5">
		     <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as  <?php echo  $_SESSION['nameDB']?>|
		       <a href="t_logout.php">Logout</a>     
		   </h3>  
		   </fieldset >

		<fieldset style="background-color: #CAF6F5">
	      <h2> <u> Account </u> </h2> 
		   
            <h4> <b>
             <ul>
			   <li> <a href="t_dashboard.php"> Dashboard   </a></li><hr>
                <li> <a href= "t_viewProfile.php"> View Profile </a> </li><hr>
                <li> <a href="t_editProfile.php"> Edit Profile </a></li><hr>
                <li> <a href="t_changePassword.php">Change Password</a> </li><hr>
            <li> <a href="t_studentSearch.php">Students</a> </li></ul><hr> </ul>
		     <h4/></b> 
		    <h1 > MY PROFILE </h1>
	          Name: <?php echo $instructor['Name']; ?> <br><br>
			  Email:  <?php echo $instructor['Email']; ?> <br><br>
		      Contactno: <?php echo $instructor['ContactNo']; ?> <br><br>
		      Username: <?php echo $instructor['Username']; ?> <br><br>

		         <button type="button"  <?php echo ('onclick="showDetails(\'' . $username . '\')"');  ?> > Address</button>
				        <div id="txtHint" ></div>
				        <br>
		  </fieldset>

			
	
		  
		
		   
	 </body>
	 
</html>	 
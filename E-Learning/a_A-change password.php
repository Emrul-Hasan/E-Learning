<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="a_style-1.css">
	<?php require_once 'js/js-changepassword.php'; ?>
	<style type="text/css">
	</style>
</head>
<body>
	<?php
	include('a_A-top.php');
	?>
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
	<br>
	<div class="container" align="center">
  		<div class="row">
  			<div class="col-4">
  				<?php
				include('a_A-link.php');
				?>
  			</div>

    		<div class="col-8">
    			<div id="bb"><br>
				 <form  method="post" action="controller/a_changepassword.php" onsubmit="validateform()">
				      <lebel>Current Password:</lebel> 
					  <input type="Password" name="cpassword" id="cpassword" onkeyup="checkPass()" onblur="checkPass()">        
			    
			          <br> <span class="error" id="cpassErr" > <?php echo $_SESSION['cpasswordE'];?></span><br>
			          <lebel style="color:green">New Password:</lebel>
			          <input type="Password" name="npassword"  id="npassword" onkeyup="checkNpassword()" onblur="checkNpassword()">         
			          
			           <br> <span class="error" id="npasswordErr" > <?php echo $_SESSION['npasswordE'];?></span><br>
			          <lebel style="color:Red">Retype New Password:</lebel>

			          <input type="Password" name="rnpassword"  id="rnpassword" onkeyup="checkRnpassword()" onblur="checkRnpassword()"  >       
			           <br> <span class="error" id="rnpasswordErr" > <?php echo $_SESSION['rnpasswordE'];?></span><br>


					  <hr>
			          <input type="submit" name="submit" value="Submit">
			         </form> <br>
      			</div>
   			</div>
  		</div><br>
	</div>


	<?php
	include('a_footer.php');
	?>

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
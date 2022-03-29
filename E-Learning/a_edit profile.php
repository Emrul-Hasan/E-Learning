<?php
session_start();

require_once 'controller/a_viewprofile.php';
$admin = fetchProfile( $_SESSION['username']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="a_style-1.css">
	<?php require_once 'js/js-editprofile.php'; ?>
	<style type="text/css">
	</style>
</head>
<body>
	<?php



 if(!isset($_SESSION['epnameEr']))
 {
   $_SESSION['epnameEr']="";
 }




 if(!isset($_SESSION['epemailErr']))
 {
   $_SESSION['epemailErr']="";
 }
$epname = $epemail ="";
 ?>
	<?php
	include('a_A-top.php');
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
				      
					   <form action="controller/a_editprofile.php" method="POST" onsubmit="validateform()" enctype="multipart/form-data">		
				      <meta><b>Name :</b> <input type :"text" value="<?php echo $admin['Name']?>" name="name" id="name" onkeyup="checkName()" onblur="checkName()"/>
                      <br> <span class="error" id="nameErr" >* <?php echo $_SESSION['epnameEr'];?></span><br>
				      

				    <meta><b>EMAIL : <input type :"text" value="<?php echo $admin['Email'] ?>"  name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()"/></b> 
				     <br> <span class="error" id="emailErr" >* <?php echo $_SESSION['epemailErr'];?></span><br>
					   <input type="submit" name="submit" value="Submit">
					  </form>
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
if(isset($_SESSION['epnameEr']) || isset($_SESSION['epemailErr'])   )
 {
$_SESSION['epnameEr']=$_SESSION['epemailErr']="";
 }

  ?>
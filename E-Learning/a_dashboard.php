<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-1.css">
	<style type="text/css">
 
  </style>
</head>
<body>
	<?php
	include('a_A-top.php');
	?>
	<br>
	<div class="container">
  		<div class="row">
    		<div class="col-4">
			    <?php
				include('a_A-link.php');
				?>
    		</div>

	    	<div class="col-4" align="center">
	    		<div id="ae">
	     			<div class="card" style="width: 18rem;">
						  <div class="card-body">
						   <h5 class="card-title">INSTRUCTOR</h5>
						   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						   <a href="a_instructor.php" class="btn btn-primary">Instructor info</a>
						  </div>
					</div>
	    		</div>
			</div>
			<div class="col-4" align="center">
	    		<div id="ae">
	     			<div class="card" style="width: 18rem;">
						  <div class="card-body">
						   <h5 class="card-title">PRIVATE TUTOR</h5>
						   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						   <a href="#" class="btn btn-primary">Private tutor info</a>
						  </div>
					</div>
	    		</div><br>
			</div>
			<div class="col-4" align="center">
	    		
			</div>
			<div class="col-4" align="center">
	    		<div id="ae">
	     			 <div class="card" style="width: 18rem;">
						  <div class="card-body">
						   <h5 class="card-title">STUDENT</h5>
						   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						   <a href="" class="btn btn-primary">Student info</a>
						  </div>
					</div>
	    		</div>
			</div>
			<div class="col-4" align="center">
	    		<div id="ae">
	     			 <div class="card" style="width: 18rem;">
						  <div class="card-body">
						   <h5 class="card-title">Course</h5>
						   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						   <a href="#" class="btn btn-primary">Course info</a>
						  </div>
					</div>
	    		</div>
			</div>
 		</div>
</div><br>

	<?php
	include('a_footer.php');
	?>
	<br>

</body>
</html>
<?php
}
else
{ header("location:a_login.php");}
?>
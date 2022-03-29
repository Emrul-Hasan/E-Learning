<?php
session_start();
require_once 'controller/a_viewprofile.php';
$instructor = fetchProfile($_SESSION['username']);
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>View profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="a_style-1.css">
	<style type="text/css">
	</style>
</head>
<body>
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
				   
				      <meta><b>Name :</b></meta><?php echo $instructor['Name'] ?><br><br>
					   <meta><b>ID :</b></meta><?php echo $instructor['AID'] ?><br><br>
				      <meta><b>EMAIL :</b></meta><?php  echo $instructor['Email'] ?><br><br>
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
}
else
{ header("location:a_login_view.php");}
?>
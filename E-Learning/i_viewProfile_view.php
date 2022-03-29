<?php
session_start();
require_once 'controller/i_dashboard_controller.php';
$instructor = fetchProfile($_SESSION['username']);
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-2.css">
	<style type="text/css">
	</style>
</head>
<body>
	<?php
	include('i_I-top.php');
	?>
	<br>
	<div class="container" align="center">
  		<div class="row">
  			<div class="col-4" align="center">
  				<?php
				include('i_I-link.php');
				?><br>
  			</div>


    		<div class="col-8">
    			<div id="bb"><br>
				     <br>
				      <meta><b>Name :</b></meta><?php echo $instructor['Name'] ?><br><br>
				      <meta><b>ID :</b></meta><?php echo $instructor['IID'] ?><br><br>
				      <meta><b>EMAIL :</b></meta><?php  echo $instructor['Email'] ?><br><br>
				      <meta><b>CONTACT NO :</b></meta><?php  echo $instructor['ContactNo'] ?><br><br>
      			</div>
   			</div>
  		</div><br>
	</div>


	<?php
	include('i_footer.php');
	?>

</body>
</html>
<?php
}
else
{ header("location:i_login_view.php");}
?>
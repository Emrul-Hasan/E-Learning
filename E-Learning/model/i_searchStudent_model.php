<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
 


require_once '../model/db_connect.php';
$mysqli = new mysqli("localhost", "root", "", "elearning");
if($mysqli->connect_error) {
  exit('Could not connect');
}



$sql = "SELECT SID,Name,Username,Email,ContactNO,Address FROM student WHERE SID=? ";


$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($sid, $name, $username, $email, $contactno, $address);
$stmt->fetch();
$stmt->close();


?>
	
			<th>Sid:</th><tr><td><?php echo  $sid  ?></td><br></tr>
			<th>Name:</th><tr><td><?php echo  $name ?></td><br></tr>
			<th>Username:</th><tr><td><?php echo  $username ?></td><br></tr>
			<th>Contactno:</th><tr><td><?php echo  $contactno  ?></td><br></tr>
			<th>Email:</th><tr><td><?php echo  $email  ?></td><br></tr>
			<th>Address:</th><tr><td><?php echo  $address  ?></td><br></tr>	
		

</body>

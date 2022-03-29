<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
      width: 600px;
			border:1px solid black;
      border-width: 3px;
      border-color: #201772;
		}
		th,td {
  	padding:9px;
	}
	</style>
</head>
<body>


<script>
function myFunction() {
  var txt;
  var r = confirm("Press a button!");
  if (r == true) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>



		<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "elearning");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM instructor 
  WHERE Name LIKE '%".$search."%'
  OR Username LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM instructor ORDER BY IID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .=  '  
 <table >
    <tr>
      <th>ID</th>
     <th>Name</th>
     <th>Username</th>
     <th>Email</th>
     <th>Action</th>
    </tr>
 '  ;
 while($row = mysqli_fetch_array($result))
 {
  $output .=  ' 
   <tr>
     <td>  '.$row["IID"].' </td>
    <td>  '.$row["Name"].' </td>
    <td>  '.$row["Username"].' </td>
    <td>  '.$row["Email"].' </td>
    <td><a href="controller/a_deleteInstructor.php?id= '.$row["IID"].' "  onclick="myFunction()" >Delete</a></td>
   </tr>
  '  ;
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>

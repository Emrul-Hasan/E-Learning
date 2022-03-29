<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
      width: 600px;
			border:1px solid black;
      border-width: 3px;
      border-color: #8D91BD;
		}
		th,td {
  	padding:9px;
	}
	</style>
</head>
<body>
		<?php

$connect = mysqli_connect("localhost", "root", "", "elearning");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM student 
  WHERE Name LIKE '%".$search."%'
  OR Username LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM student ORDER BY SID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .=  '  
 <table >
    <tr>
     <th>Name</th>
     <th>UserName</th>
     <th>E-mail</th>
    
      
    </tr>
 '  ;
 while($row = mysqli_fetch_array($result))
 {
  $output .=  ' 
   <tr>
    <td>  '.$row["Name"].' </td>
    <td>  '.$row["Username"].' </td>
    <td>  '.$row["Email"].' </td>
   </tr>
  '  ;
 }
 echo $output;
}
else
{
 echo 'Not found';
}

?>
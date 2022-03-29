<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
  <link rel="stylesheet" type="text/css" href="css/s_style.css">
	<style>
	
	</style>
</head>
<body>
		<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "elearning");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM course 
  WHERE CourseName LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM course ORDER BY CID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .=  '  
 <table >
    <tr>
     <th>Course Name </th>
     <th>Instructor</th>
     <th>Duration</th>
    </tr>
 '  ;
 while($row = mysqli_fetch_array($result))
 {
  $output .=  ' 
   <tr>
    <td>  '.$row["CourseName"].' </td>
    <td>  '.$row["Instructor"].' </td>
    <td>  '.$row["Duration"].' </td>
    
   </tr>
  '  ;
 }
 echo $output;
}
else
{
 echo 'Course Unavailable';
}

?>
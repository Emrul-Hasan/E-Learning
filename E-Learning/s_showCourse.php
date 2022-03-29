<?php  
require_once 'controller/courseController.php';

$courses = fetchAllCourses();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Course</title>
</head>
<body>

       <br><legend> <h2 align="center"> <b> Enrolled Courses </h2> </b> </legend>
	   
	   
 <br><table border="1" width="400" height="200" style="border-collapse:collapse" align="center">
     
	<thead>
		<tr>
			<th><b>Course Name</th></b>
			<th><b>Instructor</th></b>
			<th><b>Duration</th></b>
			<th><b>Action</th></b>
			
		</tr>
	</thead>
	
	<tbody align="center">
		<?php foreach ($courses as $i => $course): ?>
			<tr>
				
				<td><?php echo $course['CourseName'] ?></td>
				<td><?php echo $course['Instructor'] ?></td>
				<td><?php echo $course['Duration'] ?></td>
			

				<td><a href="controller/deleteCourse.php?id=<?php echo $course['CID']?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>
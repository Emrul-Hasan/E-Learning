<?php 

require_once ('model/model.php');

function fetchAllCourses(){
	return showAllData();

}
function fetchCourse($id){
	return showStudent($id);

}

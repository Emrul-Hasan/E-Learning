<?php 

require_once '../model/model.php';

if (deleteCourse($_GET['id'])) {
    header('Location: ../showCourse.php');
}

 ?>
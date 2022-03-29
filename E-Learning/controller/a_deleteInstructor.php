<?php 

require_once '../model/a_model.php';

if (deleteInstructor($_GET['id'])) {
    header('Location: ../a_instructor.php');
}

 ?>
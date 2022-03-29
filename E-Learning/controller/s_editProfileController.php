<?php
session_start();
require_once '../model/s_model.php';



if (isset($_POST['submit'])) {

  $epname=$epemail=$epcontactno="";

 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    $_SESSION['epnameEr']= "Name is required!";
    $flag=0;
  } else {

       $epname = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$epname)) {
         $_SESSION['epnameEr']= "Only letters and white space is allowed!";
         $flag=0;
       }
    else  {
             if(str_word_count($epname)<2)
          {
          $_SESSION['epnameEr']= "Name have to contain at least 2 words! ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    $_SESSION['epemailErr']= "Email is required!";
    $flag=0;
  } else {
    $epemail = test_input($_POST["email"]);
    if (!filter_var($epemail, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['epemailErr']= "Email format is invalid and must be in anything@gmail.com!";
      $flag=0;
    }
  }

  if (empty($_POST["contactno"])) {
    $_SESSION['epcontactnoErr'] ="ContactNo is required!";
    $flag=0;
  } else {

    $epcontactno=test_input($_POST["contactno"]);
  }


if($flag==1)
{
  

	$data['name']        = $_POST['name'];
	$data['email']       = $_POST['email'];
	$data['contactno']   = $_POST['contactno'];
	
  if (updateProfile($_SESSION['username'],$data)) 
  {
  	header('Location: ../s_viewProfile.php');
  }
  else {
    echo 'Update unsuccessful!!';
  }
}
else{
	header('Location: ../s_editProfile.php');
}

}else {
  echo "You can not access this page!";
}






?>




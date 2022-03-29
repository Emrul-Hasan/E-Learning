

<?php
session_start();
require_once '../model/t_model.php';



if (isset($_POST['submit'])) {

  $epname = $epemail =  $epcontactno="";

 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    $_SESSION['epnameEr']= "Name is required";
    $flag=0;
  } else {

       $epname = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$epname)) {
         $_SESSION['epnameEr']= "Here only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($epname)<2)
          {
          $_SESSION['epnameEr']= "Name have to contains at least two words ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    $_SESSION['epemailErr']= "Email is required";
    $flag=0;
  } else {
    $epemail = test_input($_POST["email"]);
    if (!filter_var($epemail, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['epemailErr']= "Email format is not valid";
      $flag=0;
    }
  }

  if (empty($_POST["contactno"])) {
    $_SESSION['epcontactnoErr'] ="Contact number is required";
    $flag=0;
  } else {

    $epcontactno=test_input($_POST["contactno"]);
  }



   

if($flag==1)
{
  

	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['contactno'] = $_POST['contactno'];
	
  if (profile($_SESSION['username'],$data)) {
  	header('Location: ../t_viewProfile.php');
  }
  else {
    echo 'Update unsuccessful!!';
  }
}
else{
	header('Location: ../t_editProfile.php');
}

}else {
  echo "You can not access this page!!";
}






?>






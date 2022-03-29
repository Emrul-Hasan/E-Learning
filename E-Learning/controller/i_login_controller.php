<?php
session_start();
require_once '../model/i_model.php';

$name=$password="";
$nameErr=$passwordErr="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
  
 if (empty($_POST["name"])) {
   $_SESSION['nameErr'] = "Username is required";
 }
 else {
  $name = test_input($_POST["name"]);

   if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
      $_SESSION['nameErr'] = "Only letters & white space allowed";
    }
    else {
      if(strlen($name)<2)
      {
         $_SESSION['nameErr'] = "Username must contains at least two character ";
      }
      else {
        $_SESSION['nameErr']="";
      }
    }
 }

 if(empty($_POST["password"]))
 {
   $_SESSION['passwordErr'] = "Password is required";
   header('Location: ../i_login_view.php');
 }
 else {
   $password=test_input($_POST["password"]);
   if(strlen($password)<8)
   {
     $_SESSION['passwordErr']="Password can not be less than eight characters";
   }
   else {
     if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
     {
       $_SESSION['passwordErr']="Password have to contain at least one of the special characters-%$#@";
     }
     else {
       $_SESSION['passwordErr']="";
     }
   }header('Location: ../i_login_view.php');
 }
 
 

 if (!empty($_POST["name"])  &&  !empty($_POST["password"]))
{
	try {
        $username=$_POST["name"];
		$password=$_POST["password"];
      $data = searchUsername($username);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordDB= $user['Password'] ;
			 $_SESSION['nameDB']= $user['Name'] ;
			 $_SESSION['idDB']= $user['IID'] ;
			  $_SESSION['emailDB']= $user['Email'] ;
			  $_SESSION['contactnoDB']= $user['ContactNo'] ;
			   $_SESSION['usernameDB']= $user['Username'] ;
        endforeach;
        if($password==$passwordDB)
        {
          $_SESSION['username']=$username;

          header('Location: ../i_dashboard_view.php');
        }
        else {
          $_SESSION['passwordErr']= "Incorrect Password";
		  header('Location: ../i_login_view.php');
        }
      }else {
         $_SESSION['nameErr']= "Incorrect username";
		 header('Location: ../i_login_view.php');
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }
 }

}
else {
  echo "You are not allowed to access this page";
  
  
  
}

?>

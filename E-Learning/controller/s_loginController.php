<?php
session_start();
require_once '../model/s_model.php';

$name=$password="";
$nameErr=$passwordErr="";


if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	
function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   
}
  
 if (empty($_POST["name"])) 
 {
   $_SESSION['nameErr'] = "Name is required!";
 }
 else 
 {
  $name = test_input($_POST["name"]);

   if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) 
   {
      $_SESSION['nameErr'] = "Only letters and white space is allowed!";
   }
    else 
	{
      if(strlen($name)<2)
      {
         $_SESSION['nameErr'] = "Name must contains at least 2 character! ";
      }
      else 
	  {
        $_SESSION['nameErr']="";
      }
    }
 }

 if(empty($_POST["password"]))
 {
   $_SESSION['passwordErr'] = "Password is required!";
    header('Location: ../s_login.php');
 }
 else 
 {
   $password=test_input($_POST["password"]);
   
   if(strlen($password)<8)
   {
     $_SESSION['passwordErr']="Password must not be less than 8 characters!";
   }
   else 
   {
     if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
     {
       $_SESSION['passwordErr']="Password must be contain at least 1 of the special characters(@,#,$,%)!";
     }
     else 
	 {
       $_SESSION['passwordErr']="";
     }
   }
   
    header('Location: ../s_login.php');
 }
 
 
 if (!empty($_POST["name"])  &&  !empty($_POST["password"]))
{
	try 
	{
        $username=$_POST["name"];
		$password=$_POST["password"];
        $data = login($username);
		
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordDB         = $user['Password'] ;
			 $_SESSION['nameDB'] = $user['Name'] ;
			 $_SESSION['idDB']   = $user['SID'] ;
			 $_SESSION['emailDB']= $user['Email'] ;
			 $_SESSION['contactnoDB']= $user['ContactNo'] ;
			 $_SESSION['usernameDB']= $user['Username'] ;
        endforeach;
        if($password==$passwordDB)
        {
          $_SESSION['username']=$username;

          header('Location: ../s_dashboard.php');
        }
        else 
		{
          $_SESSION['passwordErr']= "Incorrect Password!";
		  header('Location: ../s_login.php');
        }
      }
	  
	  else 
	  {
         $_SESSION['nameErr']= "Username can't match!";
		 header('Location: ../s_login.php');
      }


    } 
	
	catch (Exception $ex) 
	{
      echo $ex->getMessage();
    }
 }
}

else 
{
  echo "<br><b><h2>You are not allowed to access this page.</b></h2>";  
}

?>

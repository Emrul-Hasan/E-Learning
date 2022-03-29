<?php  

require_once '../model/s_model.php';
session_start();

if (isset($_POST['submit'])) 
{
	 $flag=1;
	 $name= $username=$password=$email=$contactno=$confirmpassword="";
	 
	 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
 
 
	 if (empty($_POST["name"])) {
    $_SESSION['nameEr'] ="Name is required!";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
          $_SESSION['nameEr'] = "Only letters and white space is allowed!";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
          $_SESSION['nameEr'] = "Name must contains at least 2 words! ";
           $flag=0;

          }
    }
  }
	
	
	 if (empty($_POST["username"])) {
      $_SESSION['usernameErr']= "User Name is required!";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         $_SESSION['usernameErr']= "Only letters and white space is allowed!";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
          $_SESSION['usernameErr']= "Userame must contains at least 2 character! ";
            $flag=0;
         }

       }
    }

    if(empty($_POST["password"]))
    {
      $_SESSION['passwordEr']= "Password is required!";
      $flag=0;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<8)
      {
        $_SESSION['passwordEr']= "Password must not be less than 8 characters!";
        $flag=0;
      }
      else {
        if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
        {
          $_SESSION['passwordEr']= "Password must contain at least 1 of the special characters(@,#,$,%)!";
          $flag=0;
        }
      }
    }
	
	if (empty($_POST["email"])) {
    $_SESSION['emailErr']= "Email is required!";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['emailErr']= "Invalid email format and must be in anything@gmail.com!";
      $flag=0;
    }
  }
  if (empty($_POST["contactno"])) {
    $_SESSION['contactnoErr']= "ContactNo is required!";
    $flag=0;
  } else {
    $contactno = test_input($_POST["contactno"]);
     
  }
  
	
	 if(empty($_POST["confirmpassword"]))
    {
      $_SESSION['cpasswordErr']= "Confirm Password is required!";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
          $_SESSION['cpasswordErr']= "Password is required!";
        $flag=0;
      }
      else {
        $confirmpassword=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$confirmpassword))
        {
            $_SESSION['cpasswordErr']= "Password and confirm password have to be same!";
          $flag=0;
        }
      }
    }
	
	
	
	if($flag==1)
	{
    	$data['name']     = $_POST['name'];
    	$data['email']    = $_POST['email'];
	    $data['username'] = $_POST['username'];
	    $data['contactno']= $_POST['contactno'];
	    $data['password'] = $_POST['password'];

        if (addStudent($data)) 
        {
	     session_destroy();
	     header("location:../s_login.php");
	    }	
        else{
	    echo "Failed to insert data";
	}
	} 
    else{
	header("location:../s_registration.php");
	}


	
} 
else 
{
	echo '<br><b><h2>You are not allowed to access this page.</b></h2>';
}

?>
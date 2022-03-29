<?php
session_start();
require_once '../model/i_model.php';



if (isset($_POST['submit'])) {
$username=$password="";
  $name = $email =  $contactno="";
 $confirmpassword="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    $_SESSION['nameEr']= "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $_SESSION['nameEr']= "Here only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
          $_SESSION['nameEr']= "Name have to contains at least two words ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    $_SESSION['emailErr']= "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['emailErr']= "Email format is not valid";
      $flag=0;
    }
  }

  if (empty($_POST["contactno"])) {
    $_SESSION['contactnoErr'] ="Contact number is required";
    $flag=0;
  } else {

    $contactno=test_input($_POST["contactno"]);
  }



    if (empty($_POST["username"])) {
      $_SESSION['usernameErr']= "Username is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         $_SESSION['usernameErr']= "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            $_SESSION['usernameErr']= "Name have to contains at least two character ";
            $flag=0;
         }

       }
    }

    if(empty($_POST["password"]))
    {
     $_SESSION['passwordEr']= "Password is required";
      $flag=0;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<8)
      {
        $_SESSION['passwordEr']= "Password can not be less than eight (8) characters";
        $flag=0;
      }
      else {
        if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
        {
          $_SESSION['passwordEr']= "Password have to contain at least one of the special characters%$#@";
          $flag=0;
        }
      }
    }

    if(empty($_POST["confirmpassword"]))
    {
      $_SESSION['cpasswordErr']= "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
        $_SESSION['passwordErr']= "Password is required";
        $flag=0;
      }
      else {
        $confirmpassword=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$confirmpassword))
        {
          $_SESSION['cpasswordErr']= "Password and confirm password have to be same";
          $flag=0;
        }
      }
    }
   

if($flag==1)
{
  
  $data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['contactno'] = $_POST['contactno'];
	$data['password'] = $_POST['password'];
 

  if (addInstructor($data)) {
	  session_destroy();
    header('Location: ../i_login_view.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else{
	header('Location: ../i_registration_view.php');
}

}else {
  echo "You can not access this page!!";
}






?>

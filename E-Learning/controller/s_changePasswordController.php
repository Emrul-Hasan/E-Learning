<?php
require_once "../model/s_model.php";

session_start();


if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  $cpassword=$npassword=$rnpassword="";

  function test_input($data) 
  {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $cpassword=$npassword=$rnpassword="";
  $flag=1;


  if (empty($_POST["cpassword"])) 
  {
       $_SESSION['cpasswordE']= "Current Password is required!";
       $flag=0;
  }
     else 
	 {
      $cpassword = test_input($_POST["cpassword"]);


    }


 if(empty($_POST["npassword"]))
 {
    $_SESSION['npasswordE']=  "New password is required!";
   $flag=0;
 }
 else 
 {
   $npassword=test_input($_POST["npassword"]);
   if(strlen($npassword)<8)
   {
     $_SESSION['npasswordE']= "Password can not be less than 8 characters!";
     $flag=0;
   }
   else 
   {
     if(substr_count($npassword,"@")<1 || substr_count($npassword,"#")<1 || substr_count($npassword,"%")<1 || substr_count($npassword,"$")<1)
     {
       $_SESSION['npasswordE']= "Password must contain at least 1 of the special characters (%,$,#,@)!";
       $flag=0;
     }
   }
 }

 if(empty($_POST["rnpassword"]))
 {
   $_SESSION['rnpasswordE']= "Retype new password is required!";
   $flag=0;
 }
 else 
 {
   $rnpassword=test_input($_POST["rnpassword"]);
   if(strlen($rnpassword)<8)
   {
      $_SESSION['rnpasswordE']="Retype new password must not be less than 8 characters!";
     $flag=0;
   }
   else 
   {
     if(substr_count($rnpassword,"@")<1 || substr_count($rnpassword,"#")<1 || substr_count($rnpassword,"%")<1 || substr_count($rnpassword,"$")<1)
     {
        $_SESSION['rnpasswordE']= "Retype Password have to contain at least 1 of the special characters (%,$,#,@)!";
       $flag=0;
     }
   }
 }


  if($flag==1)
  {
    try 
	{

      $data = searchUsername($_SESSION['username']);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['Password'] ;
        endforeach;
        if($cpassword==$passwordFromDB)
        {
          if($npassword==$rnpassword){
          if (updatePassword($_SESSION['username'], $npassword)) {
            echo 'Successfully updated!!';
           session_destroy();
            header('Location: ../s_login.php');
          }
          else 
		  {
            echo "Update unsuccessful!!";
          }
        }
        else 
		{
			header('Location: ../s_changePassword.php');
           $_SESSION['rnpasswordE']= "New password and retype password have to be same!";
        }
        }
        else 
		{
           $_SESSION['cpasswordE']= "Incorrect Password!";
		   header('Location: ../s_changePassword.php');
        }
      }
	  else 
	  {
        echo "Incorrect Username ";
      }


    } 
	
	catch (Exception $ex) 
	{
      echo $ex->getMessage();
    }

  }
  else{header('Location: ../s_changePassword.php');}
}

else 
{
  echo "You are not allowed to access this page";
}




?>





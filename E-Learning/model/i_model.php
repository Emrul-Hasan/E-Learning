<?php 

require_once 'db_connect.php';

function addInstructor($data){
	$conn = db_conn();
    $selectQuery = "INSERT into instructor (Username, Password, Name, Email, ContactNo)
VALUES (:username, :password, :name, :email, :contactno)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':contactno' => $data['contactno']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function login($Data)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `instructor` where username = :username AND password= :password ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute(
		array(
		':username'=> $_POST["username"],
		':password'=> $_POST["password"],
		)
		
		
		);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    

   $conn = null;
    return true;
}



function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `instructor` WHERE Username = '$username'";

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}





function showData($columnName)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `instructor` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updateProfile($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `instructor` set  name = ?, email = ?, contactno=?  where username=?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['name'], $data['email'],$data['contactno'],$username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}


function updatePassword($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE instructor set Password = '$password' where Username = '$username'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


 
 ?>







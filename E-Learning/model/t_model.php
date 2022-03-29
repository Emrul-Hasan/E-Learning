<?php 

require_once 'db_connect.php';


function login($Data)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `turor` where username = :username AND  password= :password ";
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

function add($data){
	$conn = db_conn();
    $selectQuery = "INSERT into tutor (Username, Password,Name, ContactNo, Email)
VALUES (:username, :password,:name, :contactno ,:email)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
			':name' => $data['name'],
        	':contactno' => $data['contactno'],
        	':email' => $data['email']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function showData($columnName)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `tutor` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function pass($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `tutor` set  password = ?,  where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['password'], $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}

function profile($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `tutor` set   email = ?, contactno=?,  name=?  where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	  $data['email'],$data['contactno'],$data['name'],$username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}






function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `tutor` WHERE Username = '$username'";

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function updatePassword($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE tutor set Password = '$password' where Username = '$username'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


 
 ?>







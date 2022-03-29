<?php 

require_once 'db_connect.php';

function showAllData()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `course` ';
    try
	{
        $stmt = $conn->query($selectQuery);
    }
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
	
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function deleteCourse($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `course` WHERE `CID` = ?";
    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function login($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `student` WHERE Username = '$username'";

    try
	{
        $stmt = $conn->query($selectQuery);
    }
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
	
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchUsername($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `student` WHERE Username = '$username'";

    try
	{
        $stmt = $conn->query($selectQuery);
    }
	catch(PDOException $e){
        echo $e->getMessage();
    }
	
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function updatePass($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `student` WHERE Username = '$username'";

    try
	{
        $stmt = $conn->query($selectQuery);
    }
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
	
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function addStudent($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into student (Username, Password, Name, Email, ContactNo)
    VALUES (:username, :password, :name, :email, :contactno)";


    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':contactno' => $data['contactno']
        ]);
    }
	
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProfile($username, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `student` set  name = ?, email = ?, contactno=?  where username=?";
	
    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['name'], $data['email'],$data['contactno'],$username
        ]);
    }
	
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }    
	
    $conn = null;
    return true;
}


function showData($columnName)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `student` where username = ?";
	
    try 
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } 
	
	catch (PDOException $e) 
	{
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updatePassword($username, $password)
{
    $conn = db_conn();
    $selectQuery = "UPDATE student set Password = '$password' where Username = '$username'";
	
    try
	{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e)
	{
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


?>







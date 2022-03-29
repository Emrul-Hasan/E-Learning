<?php
require_once '../model/db_connect.php';
$mysqli = new mysqli("localhost", "root", "", "elearning");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT Address  FROM `student` WHERE Username = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $address);
$stmt->fetch();
$stmt->close();

echo "$address";
?>

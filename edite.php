<?php 
require 'connectdb.php';
$mysqli = connectdb::getInstance()->connect();
header('Content-Type: text/html; charset= utf-8');
echo mb_internal_encoding(); 
//$conn = @mysql_connect($dbloc, $dbuser, $dbpass); 
$dsn = "mysql:host={$dbloc}"; 
$conn = new PDO($dsn, $dbuser, $dbpass); 
$conn-> exec("SET CHARACTER SET utf8"); 
$id = $_POST['id']; 
$name= $_POST['name']; 
$rating= $_POST['rating']; 
$producer= $_POST['producer']; 
//$sqlstring = "INSERT INTO `kin4ik`.`u247479859_mihai` (id, Name, rating, Budget) VALUES(:id, :Name, :Producer, :Budget, :Rate)"; 
$sql = "UPDATE `u247479859_mihai`.`kin4ik` SET	 `id` = $id, `name` = $name, `rating` = $rating, `producer` = $producer WHERE `id`=$id";
$result = $conn->prepare($sql); 
$result->bindValue(":id", $id); 
$result->bindValue(":name", $name); 
$result->bindValue(":rating", $rating); 
$result->bindValue(":producer", $producer); 
echo $result->execute(); 
$conn->lastInsertId(); 
?>
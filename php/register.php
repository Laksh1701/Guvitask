<?php
    header("Access-Control-Allow-Origin: *");

    $data = $_POST;

   echo $data["username"] . " " .$data["number"] . " " .$data["gender"] . " ".$data["education"] . " " .$data["email"] . " " .  $data["password"];
?> 
<?php 

$db_user = "root";
$db_pass = "password";
$db_name = "data";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php

session_start();
$host = "localhost"; 
$user = "root"; 
$password = "password"; 
$dbname = "data"; 

$con = mysqli_connect($host, $user, $password,$dbname);
// connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<?php

if(isset($_POST)){

	$username 		= $_POST['username'];
	$number 		= $_POST['number'];
	$gender 	    = $_POST['gender'];
	$education	    = $_POST['education'];
    $email	        = $_POST['email'];
	$password       = sha1($_POST['password']);

		$sql = "INSERT INTO users (username,number, gender, education,email, password ) VALUES (?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $number, $gender, $education,$email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
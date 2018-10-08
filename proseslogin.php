<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
if($username == "uti" && $password == 1234){

	$_SESSION["username"] = $username;
	header("Location: list.php");

}else{
	header("Location: login.php");
}
?>
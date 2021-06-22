<?php
session_start();
?>


<?php
error_reporting(0);
$user =$_POST['user'];
$password = $_POST['password'];
$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbName="miniproj";
$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error()){
	die("connect error");
}
else{
	echo "Connected";
}
$result = $con->query("select * from register where user='$user' and password='$password' ");
if(($row = mysqli_fetch_assoc($result)) !== null){
if($row['user'] == $user && $row['password'] == $password){
	$_SESSION["loginId"] = $user;
	echo "Login Success";
	header("Location:http://localhost/miniproject/index.html");
}
}
else{
	echo "Login Fail";
}
?>
<?php
session_start();
?>

<?php
// remove all session variables
session_unset();
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

if($con->query("insert into register(user,password) values('$user','$password')") === TRUE){
	echo "Inserted Successfully";
	header("Location:http://localhost/miniproject/login.html");
}
else{
	echo "Insert failed";
}

?>
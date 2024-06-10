
<?php
session_start();
include('dbconnect.php');

if (isset($_POST['login'])){

$username = mysqli_real_escape_string($dbcon,trim($_POST['username']));
$pwd = mysqli_real_escape_string($dbcon,trim($_POST['pwd']));


$query=mysqli_query($dbcon,"select * from userlogin where staffid='$username' AND password= SHA1('$pwd')");

$count=mysqli_num_rows($query);
if($count ==1){
	$row = mysqli_fetch_array($query);
	$_SESSION['staffid']=$row['staffid'];
	$_SESSION['role']=$row['status'];

		
}
else{
	$_SESSION['error'] = 'Invalid ID Number or Password';
	}
	
}
header('location: login.php');

?>


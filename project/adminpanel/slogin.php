<?php
session_start();

$con = mysqli_connect('localhost:3307', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'sdata');

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = " select * from   slogin where username='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['username'] = $username;
			header('location:sinsert2.php');
		}else{
			echo "login failed";
			header('location:sloginpage.php');
		}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
body {
	background: #111;
}
	#main {
		margin-top: 200px;
		margin-left: 400px;
		border: 3px solid #a1a1a1;
			border-radius: 10px;
			padding: 9px 35px;
			background: #8000CC;
			width: 400px;
			box-shadow: 7px 7px 6px;

		background: #111;
		background-color: #111;
		color: white;
	}
</style>

<?php
session_start();
$host="localhost"; 
$username="root"; 
$password="arrpooja"; 
$db_name="dbms"; 
$conn = mysqli_connect("$host", "$username", "$password", "$db_name")or
die("cannot connect");

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT * FROM users WHERE username='$username' and
password='$password'";
$result=mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);


if($count==1){
/*session_register("username");
session_register("password");*/
header("location:login_success.php");
}
else {
	?>
	<body>
	
<div id="main">
	<?php
die("username/password is incorrect! Please enter it again!");
/*<script >
	alert('wrong username/password');
</script>";*/
}
?>
</div>
</body>
</html>

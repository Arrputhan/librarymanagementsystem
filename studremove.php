<?php
include 'dbconfig.php';
?>
<?php
session_start();
if(isset($_POST['regno'])) {
$regno = $_POST['regno'];
$_SESSION['regno'] = $regno;

$query = "DELETE from student where Reg_No = '$regno'";

$result = mysqli_query($dbconfig, $query);
if($result && mysqli_affected_rows($dbconfig) == 1) {
echo "Selected student removed!";
} else {	
	die("Oops! Something went wrong. " . mysqli_error($dbconfig));
}
}
?>
<?php
include 'dbconfig.php';
?>
<?php
session_start();
if(isset($_POST['profid'])) {
$profid = $_POST['profid'];
$_SESSION['profid'] = $profid;

$query = "DELETE from professors where Prof_ID = $profid";

$result = mysqli_query($dbconfig, $query);
if($result && mysqli_affected_rows($dbconfig) == 1) {
echo "Selected professor removed!";
} else {	
	die("Oops! Something went wrong. " . mysqli_error($dbconfig));
}
}
?>
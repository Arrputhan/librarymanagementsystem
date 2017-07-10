
<?php
include 'dbconfig.php';
?>
<?php
//session_start();
if(isset($_POST['refid'])) {
$refid = $_POST['refid'];
//$_SESSION['refid'] = $refid;

$query = "DELETE from items where Ref_ID = $refid";

$result = mysqli_query($dbconfig, $query);
if($result && mysqli_affected_rows($dbconfig) == 1) {
echo "Selected Book removed!";
} else {	
	die("Oops! Something went wrong. " . mysqli_error($dbconfig));
}
}
?>
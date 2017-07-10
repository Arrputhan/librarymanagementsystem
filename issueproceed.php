<?php 
require('dbconfig.php');
?>
<?php
session_start();
if(isset($_POST['refid'])) {
$refid = $_POST['refid'];
$_SESSION['refid'] = $refid;

$query2 = "UPDATE items set Status='issued' where Ref_ID=$refid,Status!='issued'";
$result=mysqli_query($dbconfig,$query2);
if($result) {
	echo "success";
} else {
	echo "failed";
	mysqli_error($dbconfig);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authors detail</title>
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
</head>

<?php
include 'dbconfig.php';
?>
<?php
session_start();
if(isset($_POST['refid'])) {
	$refid = $_POST['refid'];
	$_SESSION['refid'] = $refid;

$query = "SELECT First_Name,Last_Name from authors where Ref_ID = $refid";

$result = mysqli_query($dbconfig, $query) or die(mysqli_error($dbconfig));
if($result == false)
{
	echo "The query by Ref_ID failed";
	exit();
}
$row = mysqli_fetch_array($result);
$First_Name=$row['First_Name'];
$Last_Name=$row['Last_Name'];
}
?>

<body>
<?php if($row) { ?>
<div id="main">
<table>
	<tr>
		<td>First Name:</td>
		<td><?php echo $First_Name; ?></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><?php echo $Last_Name; ?></td>
	</tr>
</table>
</div>
<?php } else { ?>
<div id="main">
	<?php die("Invalid Reference ID"); ?>
	</div>
	<?php } ?>
</body>
</html>
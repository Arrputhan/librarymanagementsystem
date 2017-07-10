<?php
include 'dbconfig.php';
?>
<?php
session_start();

if(isset($_POST['refid'])) {
$refid = $_POST['refid'];
$_SESSION['refid'] = $refid;

$query = "SELECT Name,Publication,Edition,Status from items where Ref_ID=$refid";

$result = mysqli_query($dbconfig, $query) or die(mysqli_error($dbconfig));

if($result == false)
{
	echo "The query by Ref_ID failed";
	exit();
}
$row = mysqli_fetch_array($result);

$Book_Name = $row['Name'];
$publication = $row['Publication'];
$edition = $row['Edition'];
$status = $row['Status'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chosen Book Status</title>
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
<body>
<?php if($row) { ?>
<div id="main">
<table>
	<tr>
		<td>Name of the Book:</td>
		<td><?php echo $Book_Name; ?></td>
	</tr>
	<tr>
		<td>Published By:</td>
		<td><?php echo $publication; ?></td>
	</tr>
	<tr>
		<td>Edition:</td>
		<td><?php echo $edition; ?></td>
	</tr>
	<tr>
		<td>Status:</td>
		<td><?php echo $status; ?></td>
		<?php if($status!='available') { ?>
		<p>Sorry! the book is already issued!</p>
		<?php } ?>
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
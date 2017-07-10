<?php
include 'dbconfig.php';
?>
<?php
session_start();

if(isset($_POST['regno'])) {
$regno = $_POST['regno'];
$_SESSION['regno'] = $regno;

$query = "SELECT Ref_ID,Reg_No,Fine from studentissue where Reg_No = '$regno'";

$result = mysqli_query($dbconfig, $query) or die(mysqli_error($dbconfig));

if($result == false)
{
	echo "The query by Reg_No failed";
	exit();
}
$row = mysqli_fetch_array($result);

$refid = $row['Ref_ID'];
$regno = $row['Reg_No'];
$fine = $row['Fine'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fine Log</title>
	<style type="text/css">
body {
	background: #111;
}
	#main {
		margin-top: 200px;
		margin-left: 800px;
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
		<td>Reference ID:</td>
		<td><?php echo $refid; ?></td>
	</tr>
	<tr>
		<td>Registration No:</td>
		<td><?php echo $regno; ?></td>
	</tr>
	<tr>
	<td>Fine Amount:</td>
	<td><?php echo $fine; ?></td>
    </tr>
</table>
</div>
<?php } else { ?>
<div id="main">
	<?php die("Invalid Registration Number or No Books Issued with this Registration Number"); ?>
	</div>
	<?php } ?>
</body>
</html>
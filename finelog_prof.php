<?php
include 'dbconfig.php';
?>
<?php
session_start();

if(isset($_POST['profid'])) {
$profid = $_POST['profid'];
$_SESSION['profid'] = $profid;

$query = "SELECT Ref_ID,Prof_ID,Fine from professorissue where Prof_ID=$profid";

$result = mysqli_query($dbconfig, $query) or die(mysqli_error($dbconfig));

if($result == false)
{
	echo "The query by Ref_ID failed";
	exit();
}
$row = mysqli_fetch_array($result);

$refid = $row['Ref_ID'];
$profid = $row['Prof_ID'];
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
		<td>Reference ID:</td>
		<td><?php echo $refid; ?></td>
	</tr>
	<tr>
		<td>Professor ID:</td>
		<td><?php echo $profid; ?></td>
	</tr>
	<tr>
	<td>Fine Amount:</td>
	<td><?php echo $fine; ?></td>
    </tr>
</table>
</div>
<?php } else { ?>
<div id="main">
	<?php die("Invalid Professor ID or No Books Issued with this Professor ID"); ?>
	</div>
	<?php } ?>
</body>
</html>
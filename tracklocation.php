<?php
include 'dbconfig.php';
?>
<?php
session_start();

if(isset($_POST['Ref_ID'])) {
$Ref_ID = $_POST['Ref_ID'];
$_SESSION['Ref_ID'] = $Ref_ID;

$query = "SELECT l.Location_ID as locid, l.Floor as floor, l.Shelf_No as shelf, l.Row_No as row_no, l.Column_No as col from items as b,location as l where b.Ref_ID = $Ref_ID and b.Location_ID = l.Location_ID";

$result = mysqli_query($dbconfig, $query) or die(mysqli_error($dbconfig));
if($result == false)
{
	echo "The query by Ref_ID failed";
	exit();
}
$row = mysqli_fetch_array($result);
$floor = $row['floor'];
$shelf = $row['shelf'];
$row_no = $row['row_no'];
$col = $row['col'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Track Book Location</title>
	<style type="text/css">
body {
	background: #111;
}
#main a {
	color: white;
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
<fieldset id="main">
<?php
if(!$row) {
	die("Invalid Reference ID of the Book or No such Book available! Please enter the Reference ID again!!");
}
?> 
<table>
	<tr>
		<td>Book ID:</td>
		<td><?php echo $Ref_ID; ?></td>
	</tr>
	<tr>
		<td>Floor Number:</td>
		<td><?php echo $floor; ?></td>
	</tr>
	<tr>
		<td>Shelf number:</td>
		<td><?php echo $shelf; ?></td>
	</tr>

    <tr>
		<td>In row:</td>
		<td><?php echo $row_no; ?></td>
	</tr>
	<tr>
		<td>In column:</td>
		<td><?php echo $col; ?></td>
	</tr>
</table>
<form action="trackid.php" method="post">
	<input type="submit" value="Back" />
</form>
</fieldset>
</body>
</html>
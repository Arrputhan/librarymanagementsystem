<?php
require('dbconfig.php');
?>
<?php
session_start();
if(isset($_POST['refid'])) {
$refid = $_POST['refid'];
$_SESSION['refid'] = $refid;

$query1 = "SELECT Ref_ID,Name,Publication from items where Ref_ID=$refid";
$result = mysqli_query($dbconfig,$query1);
if($result==false) {
	echo "The Query by Ref_ID failed";
	exit();
} 

$row = mysqli_fetch_array($result);
$refid = $row['Ref_ID'];
$name = $row['Name'];
$publication = $row['Publication'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finding Book Location</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#field {
		font-size: 120%;
		margin-left: 5%;
	}
</style>

    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<html>

<img src="images/entrance.jpg" style="height: 200px;">  <img src="images/ent1.jpeg" style="width: 450px; height: 200px;">  <img src="images/ent2.jpg" style="width:450px; height: 200px;">
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        EVR Library
                    </a>
                </li>
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="users.php">Administrator</a>
                </li>
                <li>
                    <a href="checkbook.php">Check Book Status</a>
                </li>
                 <li>
                    <a href="fine_student.php">Fine Logs(student)</a>
                </li>
                <li>
                    <a href="fine_prof.php">Fine Logs(professor)</a>
                </li>
                <li>
                    <a href="profpub.php">Professor Publications</a>
                </li>
                <li>
                    <a href="studpub.php">Student Publications</a>
                </li>

            </ul>
        </div>
        <br>
        <br>
<?php if($row) { ?>
	<form action="issueproceed.php" method="post">
		<table>
	<tr>
		<td>Reference ID:</td>
		<td><?php echo $refid; ?></td>
	</tr>
	<tr>
		<td>Book Name:</td>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<td>Published By:</td>
		<td><?php echo $publication; ?></td>
	</tr>
</table>
<input type="submit" name="submit" value="proceed">

</fieldset>

<?php } ?>
</div>
</body>
</html>
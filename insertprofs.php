<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EVR Library</title>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


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
                    <a href="http://vit.ac.in/academics/library">
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
<?php 
$profid = $_REQUEST['Prof_id'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$dept = $_REQUEST['dept'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];

require('dbconfig.php');
try {
	$db = new PDO("mysql:host={$host}; dbname={$database}; charset=utf8", $username, $password);
} catch (PDOException $ex) {
	die($ex->getMessage());
}
	
 $query_profs = " INSERT into professors (Prof_ID, First_Name, Last_Name, Department,Gender,Address, Phone_No)
 values(:profid,:fname,:lname,:dept,:gender,:address,:phone)";

 $query_param =  array(':profid' => $profid,
 ':fname'=>$fname,
 ':lname' => $lname,
 ':dept' => $dept,
 ':gender' => $gender,
 ':address' => $address,
 ':phone' => $phone );

 try {
 	$stmt = $db->prepare($query_profs);
 $result = $stmt->execute($query_param);
 if($result){  ?>
 <script>
 		 alert('New Professor Details added Successfully!!');
 		 </script>
 		 <?php
 } else {  ?>
 <script type="text/javascript">
 	alert('New Professor Details cannot be Added! Please recheck the data entered!!');
 	</script>
 	<?php
 }

} catch (PDOException $ex) {
	die($ex->getMessage());
}
 
 ?>
 </div>
 </body>
 </html>
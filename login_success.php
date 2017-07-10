<!DOCTYPE html>
<?php
require('dbconfig.php');
	//Start session
	session_start();	
	//Unset the variables stored in session
	//unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_USER_NAME']);
	unset($_SESSION['SESS_PASSWORD']);
	
	//	echo "Login Failed!!!"
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Administrator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet">
    <link href="stylesheets/home_public.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<html>

<img src="images/entrance.jpg" style="height: 200px;width: 450px;">  <img src="images/ent1.jpeg" style="width: 400px; height: 200px;">  <img src="images/ent2.jpg" style="width:450px; height: 200px;">
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
        
		
<div id="container">
<h1>Welcome!</h1>
<h3><p>This is the admministrator area of EVR LIBRARY for inserting or deleting the details of students/professors!</p></h3>
<h3>
<ul>
	<li><a href="viewprof.php">Professors currently available</a></li>
	<li><a href="viewstud.php">Students currently available</a></li>
	<li><a href="profs.php">Add new Professor</a></li>
	<li><a href="studs.php">Add new Student</a></li>
	<li><a href="removeprofs.php">Delete Existing Professor</a></li>
	<li><a href="removestuds.php">Delete Existing Student</a></li>
	<li><a href="books.php">Add a Book</a></li>
	<li><a href="removebooks.php">Delete a book</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
</h3>
</div>
</body>
</html>
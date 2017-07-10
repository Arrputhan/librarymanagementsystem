<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete the Book</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<html>

<img src="images/entrance.jpg" style="height: 200px;">  <img src="images/ent1.jpeg" style="width: 400px; height: 200px;">  <img src="images/ent2.jpg" style="width:450px; height: 200px;">
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
<fieldset id="fieldset">
<form method="post" action="booksremove.php">
<label>Reference ID:</label>
<input type="text" id="profid" name="refid">
<br>
<input type="submit" id= "submit" value="Remove"/>
</form>
<form action="home.php" method="post">
<input type="submit" id="submit" value="Back"/>
</form>
</fieldset>
</div>
</body>
</html>
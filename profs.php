 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Professor</title>
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
    
 <div class="container">
   <form method="post" action="insertprofs.php">
  <div class="form-group">
    <label for="email">Prof id:</label>
    <input type="text" class="form-control" name="Prof_id">
  </div>
  <div class="form-group">
    <label for="pwd">First Name:</label>
    <input type="text" class="form-control" name="fname">
  </div>
  <div class="form-group">
    <label for="pwd">Last Name:</label>
    <input type="text" class="form-control" name="lname">
  </div><div class="form-group">
    <label for="pwd">Department:</label>
    <select name="dept">
    <option value="select" selected="selected">--select--</option>
    <option value="sense">SENSE</option>
    <option value="scope">SCOPE</option>
    <option value="select">SELECT</option>
    <option value="smec">SMEC</option>
    <option value="sbse">sbse</option>
  </select>
  </div><div class="form-group">
  <label>Gender:</label>
  <select name="gender">
    <option value="select" selected="selected">--select--</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
  </select>
  
  </div><div class="form-group">
    <label for="pwd">Address:</label>
    <input type="text" class="form-control" name="address">
  </div><div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="text" class="form-control" name="phone">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
 </div>
 </body>
 <script type="text/javascript">
   
 </script>
 </html>
 
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Book</title>
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
 <div class="container">
   <form method="post" action="insertbooks.php">
  <div class="form-group">
    <label for="email">Ref Id:</label>
    <input type="text" class="form-control" name="refid">
  </div>
  <div class="form-group">
    <label for="pwd">Book Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="pwd">Genre:</label>
    <input type="text" class="form-control" name="genre">
  </div>
   <div class="form-group">
    <label for="pwd">Publication:</label>
    <input type="text" class="form-control" name="publication">
  </div>
   <div class="form-group">
    <label for="pwd">Edition:</label>
    <input type="text" class="form-control" name="edition">
  </div>
  <div class="form-group">
    <label for="pwd">Book Status:</label>
    <select name="status">
    <option value="select" selected="selected">--select--</option>
    <option value="issued">Issued</option>
    <option value="available">Available</option>
  </select>
  </div><div class="form-group">
  <label>Location Id:</label>
  <input type="text" class="form-control" name="locid">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
 </div>
 </body>
 <script type="text/javascript">
   
 </script>
 </html>
 
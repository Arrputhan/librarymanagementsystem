<!DOCTYPE html>
<html>
<head>
	<title>EVR LIBRARY</title>
	<link href="stylesheets/home_public.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<header>
<img src="images/entrance.jpg" style="height: 200px;">  <img src="images/ent1.jpeg" style="width: 400px; height: 200px;">  <img src="images/ent2.jpg" style="width:450px; height: 200px;">
<div id="header">
<h1>EVR LIBRARY</h1>
</div>
</header>


<div id="navigation">
<h2><strong>Administrator</strong></h2>
<img src="images/admin.png" style="width:30px;height:30px;">
<a href="users.php" class="btn btn-success" role="button">Click here!</a>
</div>


<fieldset id="field2"><legend>Books Available:</legend>
<img src="images/books1.jpg" style="width:40px; height: 30px;">
<a href="items.php" class="btn btn-warning" role="button">Click here!</a>
</fieldset>

<div id="page">
<fieldset id="field1">
<p>Can't find the book?</p><img src="images/books2.jpg" style="width:50px; height: 45px;">
<a href="trackid.php" class="btn btn-warning" role="button">Click here!</a>
</fieldset>
</div>
<br>

<fieldset id="field">
<form method="post" action="authors.php">
<label>Enter the reference id of the book to find its authors!!</label>
<label>Reference id:</label>
<input type="text" name="refid">
<input type="submit" name="submit" class="btn btn-info" value="Go!">
</form>
</fieldset>
<br>

<div id="page1">
<fieldset id="field3">
	<legend>Students issue book here!</legend>
	<a href="studentissue.php" class="btn btn-warning" role="button">Click here!</a>
</fieldset>
<br>
<br>
<br>
<div id="page1">
<fieldset id="field3">
	<legend>Professors issue book here!</legend>
	<a href="professorissue.php" class="btn btn-warning" role="button">Click here!</a>
</fieldset>
<br>
<br>
<br>
<br>
<br>
<fieldset id="field3"><legend>Professor Publication Details:</legend>
<a href="profpub.php" class="btn btn-warning" role="button">Click here!</a>
</fieldset>
<fieldset id="field3"><legend>Student Publication Details:</legend>
<a href="studpub.php" class="btn btn-warning" role="button">Click here!</a>
</fieldset>

</body>
</html>
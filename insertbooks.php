<?php 
$refid = $_REQUEST['refid'];
$name = $_REQUEST['name'];
$genre = $_REQUEST['genre'];
$publication = $_REQUEST['publication'];
$edition = $_REQUEST['edition'];
$status = $_REQUEST['status'];
$locid = $_REQUEST['locid'];

require('dbconfig.php');
try {
	$db = new PDO("mysql:host={$host}; dbname={$database}; charset=utf8", $username, $password);
} catch (PDOException $ex) {
	die($ex->getMessage());
}

$query = " INSERT into items (Ref_ID, Name, Genre, Publication ,Edition, Status, Location_ID)
 values(:refid,:name,:genre,:publication,:edition,:status,:locid)";

 $query_param =  array(':refid' => $refid,
 ':name'=>$name,
 ':genre' => $genre,
 ':publication' => $publication,
 ':edition' => $edition,
 ':status' => $status,
 ':locid' => $locid 
 );

 try {
 	$stmt = $db->prepare($query);
 $result = $stmt->execute($query_param);
 if($result){
 	 echo 'Data Inserted';
 } else {
 	echo 'Data not Inserted';
 }

} catch (PDOException $ex) {
	die($ex->getMessage());
}
 
 ?>

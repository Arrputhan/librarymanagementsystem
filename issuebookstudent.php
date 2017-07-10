<?php
$refid = $_REQUEST['refid'];
$regno = $_REQUEST['regno'];
$date = time();
$due_date = $date + 1209600;
$due_date = date("y-m-d G:i:s",$due_date);
echo $date;

echo $due_date;
require('dbconfig.php');
try {
	$db = new PDO("mysql:host={$host}; dbname={$database}; charset=utf8", $username, $password);
} catch (PDOException $ex) {
	die($ex->getMessage());
}

$query = "INSERT into studentissue (Ref_ID, Reg_No, Due_Date) 
			values (:refid, :regno, :Due_Date)";

$query_param = array (
':refid' => $refid,
':regno' => $regno,
':Due_Date' => $due_date
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

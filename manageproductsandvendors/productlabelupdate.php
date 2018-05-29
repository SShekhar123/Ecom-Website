<?php
include('configproduct.php');
												

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
	
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}
$ab=$_GET['label_id'];
$idc=$_GET['id1'];

$qw="UPDATE `product` SET `label`='$ab' WHERE `ID`='$idc'";
     $conn->exec($qw);
?>
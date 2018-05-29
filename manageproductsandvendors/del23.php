<?php
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$ssb=@$_POST['del23'];
$qw="DELETE FROM `vendors` WHERE `ID`='$ssb'";
$conn->exec($qw);
header('location:vendors.php');

?>
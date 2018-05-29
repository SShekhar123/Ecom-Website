<?php
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$ssb4=@$_POST['id5'];
$qw="DELETE FROM `product` WHERE `ID`='$ssb4'";
$conn->exec($qw);
header('location:promotionanddeals.php');

?>
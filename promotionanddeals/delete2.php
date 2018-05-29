<?php
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$ssb4=@$_POST['id6'];
$qw="DELETE FROM `product` WHERE `ID`='$ssb3'";
$conn->exec($qw);
header('location:promotionanddeals.php');

?>
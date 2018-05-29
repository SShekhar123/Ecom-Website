<?php
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$ssb4=@$_POST['id7'];
$qw="DELETE FROM `ads` WHERE `Img_Id`='$ssb4'";
$conn->exec($qw);
header('location:promotionanddeals.php');

?>
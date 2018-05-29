<?php
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$ss=@$_POST['sdate1'];
$ssb=@$_POST['id'];

$qw="UPDATE `ads` SET `startDate`='$ss' WHERE `Img_Id`='$ssb'";
$conn->exec($qw);
header('location:promotionanddeals.php');

?>
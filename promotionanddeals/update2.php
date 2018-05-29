<?php
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$ss1=@$_POST['sdate'];
$ss2=@$_POST['edate'];
$ss3=@$_POST['discount'];
$ssb4=@$_POST['id3'];
$qw="UPDATE `product` SET `startDate`='$ss1',`enddate`='$ss2',`Discount`='$ss3' WHERE `ID`='$ssb4'";
$conn->exec($qw);
header('location:promotionanddeals.php');

?>
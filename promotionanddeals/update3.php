<?php
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$ss4=@$_POST['sdate2'];
$ssb3=@$_POST['id2'];
$sshp=@$_POST['sshp'];

$qw="UPDATE `product` SET `home`='$sshp',`Status`='$sshp' WHERE `ID`='$ssb3'";
$conn->exec($qw);
header('location:promotionanddeals.php');

?>
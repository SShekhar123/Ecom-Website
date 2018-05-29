<?php  
$conn= new mysqli("localhost","root","","doctors_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
if (empty($_POST['email'])||empty($_POST['pass'])){

	if (!preg_match("/^[a-zA-Z ]*$/",$email)) {echo "Invalid email field<br>";}
	if (!preg_match("/^[a-zA-Z ]*$/",$pass)) {echo "Invalid password field<br>";}
    header("Location: index.php");
	$conn->close();
}
else{
	$result = mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email' ");
	$row = mysqli_fetch_assoc($result);
		if($pass==$row['password'])
	{
		session_start();
		$_SESSION['login']= $email;
		header ("location:main.php");
	}
	

 	else {
    echo "Error: " . $email . " Login Error <br>" . $conn->error;
		header ("location:index.php");
	
	}

}	
}
?>
<?php

if(isset($_POST['submit'])) {
if(isset($_POST['name']) && $_POST['name'] !=''){
	$name=$_POST['name'];
}
else{
	$error[]='name is missing';

}

if(isset($_POST['email']) && $_POST['email'] !=''){
	$email=$_POST['email'];
}
else{
$error[]='email is missing';
}

if(isset($_POST['last_name']) && $_POST['last_name'] !=''){
	$last_name=$_POST['last_name'];
}
else{
$error[]='last name is missing';
}

if(isset($_POST['pass']) && $_POST['pass'] !=''){
	$pass=$_POST['pass'];
}
else{
$error[]='password is missing';
}

if(!isset($error))
{
 
//  $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'phpdb');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// echo $q = "INSERT INTO users( `name`,  `email`, `pass`) VALUES ('$name', '$email', '$pass')"
// mysql_query($conn, $q);

$sql = "INSERT INTO users (name, email,pass)
VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else {


foreach ($error as $value) {
	# code...
	echo $value;
	echo "<br>";
}

}
}



?>

<html>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	Name
	<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo trim($_POST['name']);?>">
	<br>
	Last Name
	<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo trim($_POST['last_name']);?>">
	<br>
email
	<input type="text" name="email" value="<?php if(isset($_POST['email'])) echo trim($_POST['email']);?>">
	<br>
Password
	<input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo trim($_POST['pass']);?>">
<input type="submit" name="submit" value="submit">
</form>

</html>
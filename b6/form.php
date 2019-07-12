<?php
 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form action="" method="post">
 	First Name
 	<input type="text" name="fname" value="<?php  if(isset($_POST['fname']) && (!empty($_POST["fname"])))?>"><br/>
 	Last Name
 	<input type="text" name="lname" value="<?php if(isset($_POST['name']) && (!empty($_POST["name"]))) ?> " required=""><br/>
 	Email
 	<input type="email" name="email" value="<?php if(isset($_POST['email']) && (!empty($_POST["email"]))) ?> " required=""><br/>
 	Password
 	<input type="Password" name="pass" value="<?php if(isset($_POST['pass']) && (!empty($_POST["pass"]))) ?> " required=""><br/>
 	Submit
 	<input type="submit" name="submit" value="submit"><br/>
 </form>

</body>
</html>
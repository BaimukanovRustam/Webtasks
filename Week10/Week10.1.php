<html>
<head>
</head>
<body>  

<?php
$Username = $Password = $ConfirmPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username = test_input($_POST["Username"]);
  $Password = test_input($_POST["Password"]);
  $ConfirmPassword = test_input($_POST["ConfirmPassword"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="Username">
  <br><br>
  Password: <input type="text" name="Password">
  <br><br>
  Confirm Password: <input type="text" name="ConfirmPassword">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if($Username!=""){
	echo $Username;
	echo "Already reserved";
}else{
	echo "Username should not be empty";
}
if($Password!=$ConfirmPassword){
	echo "Password and ConfirmPassword should be equal";
	}
	elseif($Password==""){
		echo "Password should not be empty";
	}
	else{echo "Password saved";}


?>

</body>
</html>

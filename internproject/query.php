<?php 
    include('connection.php');
	$name = $_POST["user"];
	$email = $_POST["mail"];
    $pass = $_POST["passcode"];
	$query = "SELECT * from users where username = '$name' AND password = '$pass' ";
	 
	$result = mysqli_query($conn , $query);
	if(mysqli_num_rows( $result ) == 1)
	{
		$user = mysqli_fetch_assoc($result);

		echo "User Name : ".$user['username']. "<br><br>";
		echo "Email-Id : ".$user['mail']."<br><br>";
		echo "Date of Birth : " .$user['dob']. "<br><br>";
		echo "Gender : ".$user['gender']. "<br><br>";
		echo "Mobile Number : ".$user['contact']." <br><br> ";
	}
	else
	{
		echo 'User is not Valid';
	}

?>
<?php     //start php tag
//include connect.php page for database connection
require("../connectDB.php");
	if(isset($_POST["submit"]))
	{
		$username = $_POST["Username"];
                $RealName = $_POST["RealName"];
		$email = $_POST["Email"];
		$password = $_POST["Password"];

		$username = mysqli_real_escape_string($connect, $username);
                $RealName = mysqli_real_escape_string($connect, $RealName);
		$email = mysqli_real_escape_string($connect, $email);
		$password = mysqli_real_escape_string($connect, $password);
                $secret = password_hash($password, PASSWORD_BCRYPT);
		
		
		$sql="SELECT email FROM users WHERE email='$email'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			echo "Sorry...This email already exist...";
		}
		else
		{
			$query = mysqli_query($connect, "INSERT INTO users (username, realName, email, password)VALUES ('$username', '$RealName', '$email', '$secret')");
			if($query)
			{
				echo  "Thank You! you are now registered.";
			}else{
                            echo "oop";
                        }
		}
	}
?>
<?php include("connection.php"); ?>
<?php
 	$uname = $_POST["uname"];
 	$uemail = $_POST["uemail"];
 	$uphone = $_POST["uphone"];
 	$upassword = $_POST["upassword"];
 	$ucon_pass = $_POST["ucon_pass"];
 	// if ($upassword==$ucon_pass) {
	 	 $sql = "INSERT into sign_up_table(username,email_id,phone_number,password)
		 VALUES('.$uname.','.$uemail.','.$uphone.','.$upassword.')";
		 	if ($conn->query($sql) === TRUE) {
		 		header('Location: new_page.php');
				  //echo "New record created successfully";
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();

		// }
		// else
		// {
		// 	// echo "<script>alert('password'); </script>";
		// }

 	 
 	// $sql = "INSERT into sign_up_table(username,email_id,phone_number,password)
	// VALUES(".$uname.",".$uemail.",".$uphone.",".$upassword.")";
 	//echo $sql;
 


	// if (mysqli_query($conn, $sql)) {
	//   echo "New record created successfully";
	// } else {
	//   echo "Error:".$sql."<br>".mysqli_error($conn);
	// }


?>
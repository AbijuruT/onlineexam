<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	 $names = $_POST['names'];
	 $phone = $_POST['phone'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $dob = $_POST['dob'];
     $level = $_POST['level'];
     $password1 = $_POST['password1'];
     $password2 = $_POST['passw$password2'];
	 $sql = "INSERT INTO users (names,phone,email,gender,dob,level,password1,password2)
	 VALUES ('$names','$phone','$email','$gender','$dob','$level','$password1'.'$password2')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
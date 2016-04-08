<?php
	$username = $_POST['tb_username'];
	$password = $_POST['tb_password'];
	$fname = $_POST['tb_fname'];
	$lname = $_POST['tb_lname'];
	$mobile = $_POST['tb_mobile'];
	$email = $_POST['tb_email'];
	$gender = $_POST['rb_gender'];

	echo "Registration Details";
	//echo "<br>ID: ".$id;
	echo "<br>NAME: ".$fname." ",$lname;
	echo "<br>USERNAME: ".$username;
	echo "<br>MOBILE: ".$mobile;
	echo "<br>EMAIL ID: ".$email;
	echo "<br>GENDER: ".$gender;

	include("db_connection.php");

	$sql = "INSERT INTO db_client (
		username,
		password,
		first_name,
		last_name,
		mobile,
		email,
		gender
	)VALUES(
	'$username',
	'$password',
	'$fname',
	'$lname',
	'$mobile',
	'$email',
	'$gender')";
	$result = mysqli_query($con, $sql);
	if($result){
		//echo "<b>"."<i>"."<br>Data Insertion Succession"."</i>"."</b>";
		$id=mysqli_insert_id($con);
		echo '<script type="text/javascript">alert("Registration Successful. ID: ' . $id . '");</script>';
		header("location: admin.html#client_registration");
		//echo "<br>ID: ".$id;
	}else{
		//echo "<b>"."<i>"."<br>Data Insertion Failed"."</i>"."</b>";
		echo '<script type="text/javascript">alert("Registration Failed");</script>';
		die(mysqli_error());
	}
?>

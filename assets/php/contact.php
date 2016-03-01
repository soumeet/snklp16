<?php
// Email Setting
//=======================================
$admin_email = "info@snklp.com";
$from_name   = "sankalp'16";
/*
$con = mysqli_connect('mysql.hostinger.in', 'u937298476_admin', 'Sankalp@2016', 'u937298476_snklp');
$db = mysqli_select_db($con, 'u937298476_snklp');
*/
$con = mysqli_connect('localhost', 'root', '', 'u937298476_snklp');
$db = mysqli_select_db($con, 'u937298476_snklp');

if(isset($_POST['subscriberemail'])) {

	$subscriber_email = strip_tags($_POST['subscriberemail']);
	if (!filter_var($subscriber_email, FILTER_VALIDATE_EMAIL)) {
	echo 5;
	exit;
	}
	else
	{
		$sql1 = "SELECT * FROM subscription_list";
		$result1 = mysqli_query($con, $sql1);
		while ($row1 = mysqli_fetch_array($result1)){
			$tmp = $row1['email'];
			if($tmp==$subscriber_email){
				echo 2;
				exit;
			}
		}

	$to  	   	= $admin_email;
	$subject 	= "Email Suscriber Information";
	$message	= "Email Address: $subscriber_email";
	$headers  	= "MIME-Version: 1.0\r\n";
	$headers	.= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers	.= "From:$from_name <$admin_email>";
	$headers	.= "Reply-To: $admin_email\r\n"."X-Mailer: PHP/".phpversion();
	$send 		= mail($to, $subject, $message, $headers);

	$sql = "INSERT INTO subscription_list(email) VALUES ('$subscriber_email')";
	mysqli_query($con, $sql);
	echo "1";
	}
}

if(isset($_POST['contact_email'])) {

	 $user_name 	= strip_tags($_POST['contact_name']);
	 $user_email 	= strip_tags($_POST['contact_email']);
	 $user_phone 	= strip_tags($_POST['contact_phone']);
	 $comment_text 	= strip_tags($_POST['contact_text']);

	if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
	echo 5;
	exit;
	}
	else
	{
		$to  	   		= "$admin_email";
		$subject 		= "New Contact Information";
		$message		= "Name: $user_name <br/>";
		$message 		.= "Email: $user_email <br/>";
		$message 		.= "Comment: $comment_text <br/>";
		$headers  		= "MIME-Version: 1.0\r\n";
		$headers 		.= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers 		.= "From:$from_name<$admin_email>";
		$headers 		.= "Reply-To: $admin_email\r\n"."X-Mailer: PHP/".phpversion();
		$send 			= mail($to, $subject, $message, $headers);

		$sql = "INSERT INTO contact_list(name, email, phone, message) VALUES ('$user_name','$user_email','$user_phone','$comment_text')";
		mysqli_query($con, $sql);
		echo "1";
	}
}
if(isset($_POST['tb_name'])) {
    $name = $_POST['tb_name'];
	$mobile = $_POST['tb_mobile'];
	$email = $_POST['tb_email'];
	$college = $_POST['tb_college'];
/*
	echo "Registration Details";
	echo "<br>NAME: ".$name;
	echo "<br>MOBILE: ".$mobile;
	echo "<br>EMAIL ID: ".$email;
	echo "<br>COLLEGE: ".$college;
*/ 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	   echo 5;
	   exit;
	}
    else{
        $sql = "insert into db_users (
		name,
		mobile,
		email,
		college
		)values(
		'$name',
		'$mobile',
		'$email',
		'$college')";
	   $result = mysqli_query($con, $sql);
	   if ($result) {
		   //echo "<b>"."<i>"."<br>Data Insertion Succession"."</i>"."</b>";
           $id=mysqli_insert_id($con);
           echo "1";
           exit;
        }
    }
}
?>
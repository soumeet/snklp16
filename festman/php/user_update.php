<?php
	include("db_connection.php");
	if(isset($_GET['bt_usr_update'])){
		$id = $_GET['tb_uid'];
		 $name = $_GET['tb_name'];
		 $gender = $_GET['rb_gender'];
		 $mobile = $_GET['tb_mobile'];
		 $email = $_GET['tb_email'];
		 $college = $_GET['tb_college'];
	  	if($id==""){
	    		echo "Please Provide a User ID";
	  	}else{
	  		$sql = "UPDATE db_users SET 
	  		name = '$name', 
			gender = '$gender', 
			mobile = '$mobile', 
			email = '$email', 
			college = '$college' 
			WHERE id='$id'";
	  	}
	  	$usr_updated_result = mysqli_query($con, $sql);
	}
?>
<?php
	include("db_connection.php");
	if(isset($_GET['bt_usr_delete'])){
		$id = $_GET['tb_uid'];
		if($id==""){
			echo "Please Provide a User ID";
		}else{
			$sql = "DELETE * FROM db_users WHERE id = '$id'";
		}
		$usr_result = mysqli_query($con, $sql);
	}
?>
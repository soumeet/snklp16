<?php
	include("db_connection.php");
	if(isset($_GET['bt_grp_delete'])){
		$id = $_GET['tb_gid'];
		if($id==""){
			echo "Please Provide a Group ID";
		}else{
			$sql = "DELETE FROM db_groups WHERE  group_id='$id'";
		}
		$grp_deleted_result = mysqli_query($con, $sql);
	}
?>
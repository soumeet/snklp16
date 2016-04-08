<?php
	include("db_connection.php");
	if(isset($_GET['bt_grp_update'])){
		$id = $_GET['tb_gid'];
		$name = $_GET['tb_name'];
		$event = $_GET['cb_event'];
		$mem1 = $_GET['tb_mem1'];
		$mem2 = $_GET['tb_mem2'];
		$mem3 = $_GET['tb_mem3'];
		$mem4 = $_GET['tb_mem4'];
		if($id==""){
			echo "Please Provide a Group ID";
		}else{
			$sql = "UPDATE db_groups SET 
			name = '$name', 
			event = '$event',  
			member1 = '$mem1',  
			member2 = '$mem2', 
			member3 = '$mem3', 
			member4 = '$mem4' 
			WHERE group_id='$id'";
		}
		$grp_updated_result = mysqli_query($con, $sql);
	}
?>
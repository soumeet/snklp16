<?php
	include("db_connection.php");
	if(isset($_GET['id'])){
        $id = $_GET['id'];
        //echo "id: ".$id;
        $sql = "SELECT * FROM db_users WHERE id = '$id'";
        $usr_result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($usr_result);
        echo $row[1];
        exit;
	}
?>
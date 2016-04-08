<?php
	include("db_connection.php");
	if(isset($_POST['tb_gtype'])){
		$type = $_POST['tb_gtype'];
        $by = $_POST['cb_gby'];
        //echo "by: ".$by." query: ".$type."\r\n";
        if($by=="ID"){
           if($type==""){
               $sql = "SELECT * FROM db_groups";
           }else{
               $sql = "SELECT * FROM db_groups WHERE group_id = '$type'";
           }    
        }else if($by=="NAME"){
           if($type==""){
               $sql = "SELECT * FROM db_groups";
           }else{
               $sql = "SELECT * FROM db_groups WHERE name = '$type'";
           }    
        }else if($by=="EVENT"){
           if($type==""){
               $sql = "SELECT * FROM db_groups";
           }else{
               $sql = "SELECT * FROM db_groups WHERE event = '$type'";
           }    
        }
        //echo "".$sql."\r\n";
        $grp_result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_all($grp_result);
        //echo json_encode($row);
        echo "[";
        $i=1;
        while ($row = mysqli_fetch_array($grp_result)){
            $id=$row['group_id'];
            $name=$row['name'];
            $event=$row['event'];
            $mem1 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member1]'"))[0];
            $mem2 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member2]'"))[0];
            $mem3 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member3]'"))[0];
            $mem4 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member4]'"))[0];
            $mem5 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member5]'"))[0];
            
            echo  "[\"".$id."\",\"".$name."\",\"".$event."\",\"".$mem1."\",\"".$mem2."\",\"".$mem3."\",\"".$mem4."\",\"".$mem5."\"]";
            
            if(($i)!=mysqli_num_rows($grp_result))
                echo ",";
            $i=$i+1;
            
        }
        echo "]";
        exit;
	}
?>
<?php

    header("Content-type: application/json");
    include("db_connection.php");
	if(isset($_POST['cb_event'])){
		$event = $_POST['cb_event'];
        $data=array('res' => '0');
        //echo "<br>EVENT: ".$event."<br>";
        if($event==""){
			$sql = "SELECT * FROM db_groups";
		}else{
			$sql = "SELECT * FROM db_groups WHERE event = '$event'";
		}
		$result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_all($result);
        echo "[";
        $i=1;
        while ($row = mysqli_fetch_array($result)){
            $id=$row['group_id'];
            $name=$row['name'];
            $event=$row['event'];
            $mem1 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member1]'"))[0];
            $mem2 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member2]'"))[0];
            $mem3 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member3]'"))[0];
            $mem4 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member4]'"))[0];
            $mem5 = mysqli_fetch_row(mysqli_query($con, "SELECT name FROM db_users WHERE id = '$row[member5]'"))[0];
            
            //echo  $id." ".$name." ".$mem1." ".$mem2." ".$mem3." ".$mem4." ".$mem5."\r\n";
            echo  "[\"".$id."\",\"".$name."\",\"".$event."\",\"".$mem1."\",\"".$mem2."\",\"".$mem3."\",\"".$mem4."\",\"".$mem5."\"]";
            
            //echo "".$i." ".mysqli_num_rows($result);
            if(($i)!=mysqli_num_rows($result))
                echo ",";
            $i=$i+1;
        }
        echo "]";
        //echo json_encode($data);
        //echo json_encode($row);
        exit;
    }   
?>

<?php
	include("db_connection.php");
	if(isset($_POST['cb_event'])){
		$event = $_POST['cb_event'];
        if($event==""){
			$sql = "SELECT * FROM db_groups";
		}else{
            if($event=="CS"){
                $sql = "SELECT * FROM db_groups WHERE event = 'CS'";
                $m=5;
            }
			if($event=="ROE" || $event=="ROB" || $event=="ROS"){
                $sql = "SELECT member1, member2, member3, member4 FROM db_groups WHERE event = '$event'";
                $m=4;
            }
            if($event=="COD" || $event=="JUN"){
                $sql = "SELECT member1, member2 FROM db_groups WHERE event = '$event'";
                $m=2;
            }
            if($event=="NFS" || $event=="FIFA" || $event=="MOM"){
                $sql = "SELECT member1 FROM db_groups WHERE event = '$event'";
                $m=1;
            }
		}
        
        $id_result = mysqli_query($con, $sql);
        //echo "".$id_result;
        echo "[";
        $i=1;
        while ($row = mysqli_fetch_array($id_result)){
            /*
            $id = $row[0];
            $sql = "SELECT * FROM db_users WHERE id = '$id'";
            $usr_result = mysqli_query($con, $sql);        
            while ($row = mysqli_fetch_array($usr_result)){
                $id=$row['id'];
                $name=$row['name'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $college = $row['college'];
                echo  "[\"".$id."\",\"".$name."\",\"".$mobile."\",\"".$email."\",\"".$college."\"]";
            }
            if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
            */
            /*if($m = 1){
                fetch_id($row[0]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
            }
            if($m = 2){
                fetch_id($row[0]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[1]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
            }
            if($m = 4){
                fetch_id($row[0]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[1]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[2]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[3]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
            }*/
            if($m = 5){
                fetch_id($row[0]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[1]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[2]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[3]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
                fetch_id($row[4]);
                if(($i)!=mysqli_num_rows($id_result))
                    echo ",";
            }
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            $i=$i+1;
        }
        
        echo "]";
        exit;
	}

    function fetch_id($id) {
        include("db_connection.php");
        $sql = "SELECT * FROM db_users WHERE id = '$id'";
        $usr_result = mysqli_query($con, $sql);        
        while ($row = mysqli_fetch_array($usr_result)){
            if(!is_null($row['id'])){
                $id=$row['id'];
                $name=$row['name'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $college = $row['college'];
                echo  "[\"".$id."\",\"".$name."\",\"".$mobile."\",\"".$email."\",\"".$college."\"]";                
            }
        }
        
    }

?>
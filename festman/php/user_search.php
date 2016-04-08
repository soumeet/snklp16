<?php
	include("db_connection.php");
	if(isset($_POST['tb_type'])){
		$type = $_POST['tb_type'];
        $by = $_POST['cb_by'];
        //echo "by: ".$by." query: ".$type."\r\n";
        if($by=="ID"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE id = '$type'";
           }    
        }else if($by=="NAME"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE name = '$type'";
           }    
        }else if($by=="MOBILE"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE mobile = '$type'";
           }    
        }else if($by=="EMAIL"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE email = '$type'";
           }    
        }
        
        $usr_result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_all($usr_result);
        //echo json_encode($row);
        
        echo "[";
        $i=1;
        while ($row = mysqli_fetch_array($usr_result)){
            $id=$row['id'];
            $name=$row['name'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $college = $row['college'];
            
            echo  "[\"".$id."\",\"".$name."\",\"".$mobile."\",\"".$email."\",\"".$college."\"]";
            
            if(($i)!=mysqli_num_rows($usr_result))
                echo ",";
            $i=$i+1;
            
        }
        echo "]";
        
        exit;
	}
?>
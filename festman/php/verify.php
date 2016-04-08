<?php
session_start();
//include("db_connection.php");
if(isset($_POST['bt_clnt_login'])){      
      $uid = $_POST['tb_username'];
      $pswd = $_POST['tb_password'];
      //$sql1 = "SELECT username FROM db_client";
      //$result1 = mysqli_query($con, $sql1);
      //while ($row1 = mysqli_fetch_array($result1)){
        //$tmp_id = $row1['username'];
        if($uid=='regdesk'){
          //$sql2 = "SELECT password FROM db_client WHERE username = '$tmp_id'";
          //$result2 = mysqli_query($con, $sql2);
          //while ($row2 = mysqli_fetch_array($result2)){
            //$tmp_pswd = $row2['password'];
            if($pswd=='snklp'){
                $_SESSION['sid']=session_id();
                header("Location: ../client.php");
                exit;
            }else{
                header("Location: ../login.php");
            }   
          //}
        }else{
            header("Location: ../login.php");
        }
      //}
    exit;
}
?>

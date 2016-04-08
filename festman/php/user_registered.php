<?php
header("Content-type: application/json");
include("db_connection.php");
if(isset($_POST['tb_name'])) {
    $name = $_POST['tb_name'];
	$mobile = $_POST['tb_mobile'];
	$email = $_POST['tb_email'];
	$college = $_POST['tb_college'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $data=array('res'=>'5', 'id'=>'SNKLP0x00');
        $js_str = json_encode($data);
        echo $js_str;
        exit;
    }
    else{
        $sql = "insert into db_users (
		name,
		mobile,
		email,
		college
		)values(
		'$name',
		'$mobile',
		'$email',
		'$college')";
	   $result = mysqli_query($con, $sql);
	   if ($result) {
	   	$id=mysqli_insert_id($con);
           $data=array('res' => '1', 'id' => ''.$id);
           $js_str = json_encode($data);
           echo $js_str;
           exit;
        }
    }

}
?>

<?php
header("Content-type: application/json");
include("db_connection.php");
if(isset($_POST['tb_grp_name'])) {
    $name = $_POST['tb_grp_name'];
	$event = $_POST['cb_event'];
	$mem1 = $_POST['tb_mem1'];
	$mem2 = $_POST['tb_mem2'];
	$mem3 = $_POST['tb_mem3'];
	$mem4 = $_POST['tb_mem4'];
    $mem5 = $_POST['tb_mem5'];
    $sql = "insert into db_groups (
            name,
            event,
            member1,
            member2,
            member3,
            member4,
            member5
            ) values(
            '$name',
            '$event',
            '$mem1',
            '$mem2',
            '$mem3',
            '$mem4',
            '$mem5')";
    $result = mysqli_query($con, $sql);
	if ($result) {
        $id=mysqli_insert_id($con);
        $data=array('res' => '1', 'id' => ''.$id);
        $js_str = json_encode($data);
        echo $js_str;
        exit;
    }else{
        $data=array('res'=>'0', 'id'=>'SNKLP0x00');
        $js_str = json_encode($data);
        echo $js_str;
        exit;
    }
}
?>

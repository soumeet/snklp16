<?php
session_start();
if(!isset($_SESSION['sid']))
    header("location:login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Client</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/lato.css" >
  	<link rel="stylesheet"  type="text/css" href="css/montserrat.css" >
  	<link rel="stylesheet" href="css/dynamics.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="user_validate.js"></script>
	<script type="text/javascript" src="group_validate.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="client.php">Sankalp'16</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	<li><a href="php/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
	</nav>

<div class="container" style="width: 100%;">
  <ul class="nav nav-pills nav-justified">
    <li><a data-toggle="pill" href="#usr_reg">User Registration</a></li>
    <li><a data-toggle="pill" href="#grp_reg">Group Registration</a></li>
    <li><a data-toggle="pill" href="#usr_search">User Search</a></li>
    <li><a data-toggle="pill" href="#grp_search">Group Search</a></li>
  </ul>

  <div class="tab-content">
    <div id="usr_reg" class="tab-pane fade">
		<br>
		<center>
            <form method="post" name="fm_usr_register" id="fm_usr_register" action="php/user_registered.php">
			<table>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_name" id="tb_name" value="Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full Name';}" id="active">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_email" id="tb_email" value="your@email.com " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your@email.com ';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_mobile" id="tb_mobile" value="+91" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '+91';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_college" id="tb_college" value="College" name="college" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'College Name';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
                        <input class="btn btn-default" type="submit" name="bt_register" id="bt_register" value="Register" style="width: 100px;">
                        <input class="btn btn-default" name="bt_clear" id="bt_clear" value="Clear" onclick="$('#fm_usr_register')[0].reset();" style="width: 100px;">
					</td>
				</tr>
                <tr>
                    <div id="show_register_msg">Please provide us with correct details.</div>
                </tr>
				</table>
			</form>
		</center>    
    </div>
    <div id="grp_reg" class="tab-pane fade">
		<br>
		<center>
            <form method="post" name="fm_grp_register" id="fm_grp_register" action="php/group_registered.php">
			<table>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_grp_name" id="tb_grp_name" value="Group Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Group Name';}" id="active">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
								<select class="form-control" name="cb_event" id="cb_event">
									<option value="EVENT">Event</option>
									<option value="ROE">RoExplorer</option>
									<option value="ROB">RoBoxing</option>
									<option value="ROS">RoSoccer</option>
									<option value="CS">Counter Strike</option>
									<option value="FIFA">Fifa</option>
									<option value="NFS">Need For Speed</option>
									<option value="MOM">Momentika</option>
									<option value="JUN">JunkYard</option>
									<option value="COD">CodeClash</option>
								</select>
                        </div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_mem1" id="tb_mem1" value="Member 1 ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Member 1 ID';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_mem2" id="tb_mem2" value="Member 2  ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Member 2 ID';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_mem3" id="tb_mem3" value="Member 3 ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Member 3 ID';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_mem4" id="tb_mem4" value="Member 4 ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Member 4 ID';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2"></span>
								<input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_mem5" id="tb_mem5" value="Member 5 ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Member 5 ID';}">
						</div><br>
					</td>
				</tr>
				<tr>
					<td>
                        <input class="btn btn-default" type="submit" name="bt_register" id="bt_register" value="Register" style="width: 100px;">
                        <input class="btn btn-default" name="bt_clear" id="bt_clear" value="Clear" onclick="$('#fm_grp_register')[0].reset();" style="width: 100px;">
					</td>
				</tr>
                <tr>
                    <div id="grp_register_msg">Please provide us with correct details.</div>
                </tr>
				</table>
			</form>
		</center>    
    </div>

    <div id="usr_search" class="tab-pane fade">
			<br><br>
			<form method="post" name="fm_usr_search" id="fm_usr_search" action="php/user_search.php">
				<div class="row">
                <div class="col-md-2 col-md-offset-2">
                    <div class="form-group">
                        <select class="form-control" name="cb_by" id="cb_by">
                            <option value="ID">ID</option>
                            <option value="NAME">Name</option>
							<option value="MOBILE">Mobile</option>
				            <option value="EMAIL">Email</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">@</span>
				        <input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_type" id="tb_type" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
				    </div>
                </div>
                <div class="col-md-1">
                    <input class="btn btn-default" type="submit" value="Search" name="bt_search" id="bt_search">
                </div>
            </div>
			</form>
			<h3>User List</h3>
			<div id="user_msg">#message</div>
			<table id="usr_table_result" class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email ID</th>
						<th>College</th>
					</tr>
				</thead>
				<tbody id="results">
                    <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$mobile</td>
                        <td>$email</td>
                        <td>$college</td>
                    </tr>
				</tbody>
			</table>
		</div>
    <div id="grp_search" class="tab-pane fade">
			<br><br>
			<form method="post" name="fm_grp_search" id="fm_grp_search" action="php/group_search.php">
				<div class="row">
                <div class="col-md-2 col-md-offset-2">
                    <div class="form-group">
                        <select class="form-control" name="cb_gby" id="cb_gby">
                            <option value="ID">ID</option>
                            <option value="NAME">Name</option>
							<option value="EVENT">Event</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">@</span>
				        <input type="text" class="form-control" aria-describedby="sizing-addon2" name="tb_gtype" id="tb_gtype" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
				    </div>
                </div>
                <div class="col-md-1">
                    <input class="btn btn-default" type="submit" value="Search" name="bt_search" id="bt_search">
                </div>
            </div>
			</form>
			<h3>Group List</h3>
			<div id="grp_msg">#message</div>
			<table id="grp_table_result" class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Group Name</th>
						<th>Event</th>
						<th>Member 1</th>
						<th>Member 2</th>
						<th>Member 3</th>
						<th>Member 4</th>
						<th>Member 5</th>
					</tr>
				</thead>
				<tbody id="results">
                    <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$event</td>
                        <td>$mem1</td>
                        <td>$mem2</td>
                        <td>$mem3</td>
                        <td>$mem4</td>
                        <td>$mem5</td>
                    </tr>
				</tbody>
			</table>
			</div>
  </div>
</div>
<!--<footer class="text-center">
  <h5>copyright@2016</h5>
</footer>-->
<script type="text/javascript">

$("#fm_usr_register").submit(function(e)
{
    $('#show_register_msg').html('<div class=gen>Registering...</div>');
    
    var RE_MOBILE = /^\d{10}$/;
    //var RE_EMAIL = /^(\w[\-\.]*\w+@(\w+\.)+[A-Za-z]+$)/;
    
    var tb_name = $('#tb_name').val();
    var tb_email = $('#tb_email').val();
    var tb_mobile = $('#tb_mobile').val();
  	var tb_college = $('#tb_college').val();
    var formURL = $(this).attr("action");
    var data = {
                    tb_name:tb_name,
  					tb_email:tb_email,
                    tb_mobile:tb_mobile,
  					tb_college:tb_college
    }
    
	/*if (!RE_EMAIL.test(tb_email)) {
		alert("Invalid Email ID");
        $('#show_register_msg').html('<div class=gen>Check Email ID</div>');
		return false;
	}*/
    if (!RE_MOBILE.test(tb_mobile)) {
		alert("Invalid Mobile Number");
        $('#show_register_msg').html('<div class=gen>Check Mobile Number</div>');
		return false;
	}

    $.ajax({   
            url : formURL,
  			type: "POST",
  			data : data,
            dataType: 'json',
            success: function (data) {
  								 if(data.res=='1'){
  									$('#show_register_msg').html('<div class=gen>Thank you very much, You\'ve been registered.</div>');
                                    alert("Your User ID: SNKLP"+data.id);
                                    $("#fm_usr_register")[0].reset();
                                    $('#show_register_msg').html('<div class=gen>Please provide us with correct details.</div>');
  								 }else if(data.res=='5'){
                                     $('#show_register_msg').html('<div class=err>Please enter a valid email address</div>');
                                 }else{
                                     $('#show_register_msg').html('<div class=err>Error in registration.</div>');
                                 }
  							}
  		});
  		e.preventDefault();
});
    
$("#fm_grp_register").submit(function(e){
    
    $('#grp_register_msg').html('Registering...');
  	var RE_NAME = /^[a-z0-9]+$/i;
    var RE_NUM = /^[0-9]*$/;
    var tb_grp_name = $('#tb_grp_name').val();
    var cb_event = $('#cb_event').val();
    var tb_mem1 = $('#tb_mem1').val();
    var tb_mem2 = $('#tb_mem2').val();
    var tb_mem3 = $('#tb_mem3').val();
    var tb_mem4 = $('#tb_mem4').val();
    var tb_mem5 = $('#tb_mem5').val();
    
    if (cb_event=="EVENT") {
		alert("Select a Event");
		return false;
    }else{
        if (!RE_NAME.test(tb_grp_name)){
            alert("Group Name cannot be empty");
            return false;
	   }else{
           if(cb_event=="NFS" || cb_event=="FIFA" || cb_event=="MOM"){
               if (!RE_NUM.test(tb_mem1)) {
                    alert("Invalid Member ID");
                    return false;
	           }       
           }/*else if(cb_event=="JUN" || cb_event=="COD"){
               if (!RE_NUM.test(tb_mem1) || !RE_NUM.test(tb_mem2)){
                    alert("Invalid Member ID");
                    return false;
                }
           }else if(cb_event=="ROE" || cb_event=="ROB" || cb_event=="ROS"){
                if(!RE_NUM.test(tb_mem1) || !RE_NUM.test(tb_mem2) || !RE_NUM.test(tb_mem3) || !RE_NUM.test(tb_mem4)) {
                    alert("Invalid Member ID");
                    return false;
                }       
           }else if(cb_event=="CS"){
               if (!RE_NUM.test(tb_mem1) || !RE_NUM.test(tb_mem2) || !RE_NUM.test(tb_mem3) || !RE_NUM.test(tb_mem4) || !RE_NUM.test(tb_mem5)) {
                    alert("Invalid Member ID");
                    return false;
                }
           }*/
       }
    }
    
    var formURL = $(this).attr("action");
    var data = {
                    tb_grp_name:tb_grp_name,
  					cb_event:cb_event,
                    tb_mem1:tb_mem1,
                    tb_mem2:tb_mem2,
                    tb_mem3:tb_mem3,
                    tb_mem4:tb_mem4,
                    tb_mem5:tb_mem5
    }
    
    $.ajax({   
            url: formURL,
  			type: "POST",
            data: data,
            dataType: 'json',
            success: function (data) {
                                //alert(data.res);
                                if(data.res=='1'){
  									$('#grp_register_msg').html('<div class=gen>Thank you very much, You\'ve been registered.</div>');
                                    alert("Your Team ID: SNKLP"+data.id);
                                    $("#fm_grp_register")[0].reset();
                                    $('#grp_register_msg').html('<div class=gen>Please provide us with correct details.</div>');
  								 }else{
                                     $('#grp_register_msg').html('<div class=err>Error in registration.</div>');
                                 }
  		    }
  		});
        e.preventDefault();

});

$("#fm_usr_search").submit(function(e){
    var cb_by = $('#cb_by').val();
    var tb_type = $('#tb_type').val().toUpperCase();
    var formURL = $(this).attr("action");
    var data = {
                    cb_by:cb_by,
                    tb_type:tb_type
    }
    $.ajax({   
            url : formURL,
  			type: "POST",
            data : data,
            dataType: 'json',
            success: function (data) {
                                 //alert(data);
  								 if(data!=''){
                                    $("#usr_table_result tbody > tr").remove();
                                    $('#user_msg').html(data.length+' records found');
                                    //alert(data[0][0]);
                                    for(var i=0;i<data.length;i++){
                                        $('#usr_table_result > tbody:last-child').append('<tr><td>'+data[i][0]+'</td><td>'+data[i][1]+'</td><td>'+data[i][2]+'</td><td>'+data[i][3]+'</td><td>'+data[i][4]+'</td></tr>');
                                    };
  								 }else{
                                     $('#user_msg').html('no records found');
                                     $("#table_result tbody > tr").remove(); 
                                 }
  							}
  		});
    
  		e.preventDefault();

});

$("#fm_grp_search").submit(function(e){
    var cb_gby = $('#cb_gby').val();
    var tb_gtype = $('#tb_gtype').val().toUpperCase();
    var formURL = $(this).attr("action");
    var data = {
                    cb_gby:cb_gby,
                    tb_gtype:tb_gtype
    }
    $.ajax({   
            url : formURL,
  			type: "POST",
            data : data,
            dataType: 'json',
            success: function (data) {
                                 //alert(data);
  								 if(data!=''){
                                    $("#grp_table_result tbody > tr").remove();
                                    $('#grp_msg').html(data.length+' records found');
                                    //alert(data[0][0]);
                                    for(var i=0;i<data.length;i++){
                                        /*data[i][3]='<a href="php/user_details.php?id='+data[i][3]+'">'+data[i][3]+'</a>';
                                        data[i][4]='<a href="php/user_details.php?id='+data[i][4]+'">'+data[i][4]+'</a>';
                                        data[i][5]='<a href="php/user_details.php?id='+data[i][5]+'">'+data[i][5]+'</a>';
                                        data[i][6]='<a href="php/user_details.php?id='+data[i][6]+'">'+data[i][6]+'</a>';
                                        data[i][7]='<a href="php/user_details.php?id='+data[i][7]+'">'+data[i][7]+'</a>';*/
                                        $('#grp_table_result > tbody:last-child').append('<tr><td>'+data[i][0]+'</td><td>'+data[i][1]+'</td><td>'+data[i][2]+'</td><td>'+data[i][3]+'</td><td>'+data[i][4]+'</td><td>'+data[i][5]+'</td><td>'+data[i][6]+'</td><td>'+data[i][7]+'</td></tr>');
                                    };
  								 }else{
                                     $('#grp_msg').html('no records found');
                                     $("#table_result tbody > tr").remove(); 
                                 }
  							}
  		});
    
  		e.preventDefault();

});

</script>
</body>
</html>
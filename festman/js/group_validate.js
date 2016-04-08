var RE_NAME = /^(\w)+$/;

function group_validation(form){
	var GROUPNAME = form.tb_grp_name.value;
	var EVENT = form.cb_event.value;
	var MEM1 = form.tb_mem1.value;
	var MEM2 = form.tb_mem2.value;
	var MEM3 = form.tb_mem3.value;
	var MEM4 = form.tb_mem4.value;
	var MEM5 = form.tb_mem5.value;
    
	if (GROUPNAME=="") {
		alert("Group Name cannot be empty");
		return false;
	}
	if (EVENT=="EVENT") {
		alert("Select a Event");
		return false;
	}
	if (!RE_NAME.test(MEM1)) {
		alert("Invalid Member 1 Name");
		return false;
	}
	if (!RE_NAME.test(MEM2)) {
		alert("Invalid Member 2 Name");
		return false;
	}
	if (!RE_NAME.test(MEM3)) {
		alert("Invalid Member 3 Name");
		return false;
	}
	if (!RE_NAME.test(MEM4)) {
		alert("Invalid Member 4 Name");
		return false;
	}
    if (!RE_NAME.test(MEM5)) {
		alert("Invalid Member 4 Name");
		return false;
	}
}

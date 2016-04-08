var RE_NAME = /^(\w)+$/;
var RE_MOBILE = /^\d{10}$/;
var RE_EMAIL = /^(\w[\-\.]*\w+@(\w+\.)+[A-Za-z]+$)/;

function user_validation(form){
	var NAME = form.tb_name.value;
	var MOBILE = form.tb_mobile.value;
	var EMAIL = form.tb_email.value;
	var COLLEGE = form.tb_college.value;
	//var error = [];
	if (!RE_NAME.test(NAME)) {
		alert("Invalid Name");
		return false;
	}
	if (!RE_MOBILE.test(MOBILE)) {
		alert("Invalid Mobile Number");
		return false;
	}
	if (!RE_EMAIL.test(EMAIL)) {
		alert("Invalid Email ID");
		return false;
	}
	if (COLLEGE=="") {
		alert("College cannot be empty");
		return false;
	}
}

//Validtion Code For Inputs

var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

function validated(){
	if (email.value.length < 12) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (password.value!="sahanaaaaa") {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
	return false;

}
function email_Verify(){
	if (email.value.length >= 11) {
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
		return true;
	}
}
function pass_Verify(){
	var text1 = document.forms['form']['password'];
	console.log(text1);
	// var text2 = 
	// let result = text1.localeCompare(text2);
	if (password.value==="sahanaaaaa") {
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}
}


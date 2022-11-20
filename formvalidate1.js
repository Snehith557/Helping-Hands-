function toggleVisibility(id) {
   var el = document.getElementById(id);
    
   if (el.style.visibility=="visible") { 
          el.style.visibility="hidden";
		  
		  alert("You have Selected "+ id)
     }
     else {
          el.style.visibility="visible";
		  alert("You have Selected "+ id);
     }
 }

function validateName(){
    console.log("hi")
    var name = document.getElementById("name").value
    // console.log(name)
    var err = document.getElementById("name_err")

    const format = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
    console.log(format.test(name),name)

    if(format.test(name)  === true ){
        err.innerText = "Error: Name cannot contain special characters"
        console.log(format.test(name))
        return  
    }
    if (name === "" || name === null  ){
        console.log("name is left null")
        err.innerText ="Error: Name cannot be left empty"
    }
    else{
        console.log("name",name)
        err.innerText = ""
    }
}

function validateEmail(){

    var email_addr = document.getElementById("email").value
    var err = document.getElementById("email_err")
    if(email_addr ==="" || email_addr===null)
    {
        err.innerText = "Email address cannot be left blank "
        return
    }


    validateName()
    const regex_pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (regex_pattern.test(email_addr)) {
        err.innerText = ""
    }
    else {
        console.log('The email address is not valid');
        err.innerText = "The email address in not valid "
    }
}

function validatePhone(){
    validateName()
    validateEmail()
    var phone = document.getElementById("phone").value;
    var err = document.getElementById("phone_err");

    // checking if the phone number length is 10 else give an error

    const format = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;

    console.log(format.test(phone))
    if(format.test(phone))
    {
        
        console.log("erroe is there")
        err.innerText = "Phone number cannot contain special characters"
        return
    }


    if(phone.length == 10){
        err.innerHTML = ""
    }
    if(phone.length<10 || phone.length >10){
        err.innerText = "Enter a valid phone number"
    }
}
// address is not mandatory

function checkBoxes(){
    var clothes  = document.querySelector('#clothes').checked
    var check_money  = document.querySelector('#money').checked
    var food = document.querySelector('#food').checked
    var medicines  = document.querySelector('#medicine').checked

    // console.log(check_money.checked);
    // console.log(check_money.checked);
    // console.log(check_money.checked);



    if(check_money  || clothes  || food || medicines )
    {
        console.log("something is ticked")
    }
    else{
        console.log("please tick atleast one of the field")
         document.getElementById("checkBoxes").innerHTML =  `* Please tick atleast one of the fields`
    }
}
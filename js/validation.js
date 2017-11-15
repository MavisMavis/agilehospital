function checkForm(form){
    // Check the username is blank or not
    if(form.name.value == "") {
        alert("Error: Username cannot be blank!");
        form.name.focus();
        return false;
    }
    
    if(form.email.value == "") {
        // Check the email is blank or not
        alert("Error: Email cannot be blank!");
        form.email.focus();
        return false;
    }
    
    se = /\S+@\S+\.\S+/;
    // Check the email format is correct or not
    if(!se.test(form.email.value)) {
        alert("Error: Email format is wrong!");
        form.email.focus();
        return false;
    }
    
        // Password must same with confirm password
        if(form.password.value != form.confirmpassword.value){
            alert("Error: Password and confirm password not match!");
            form.password.focus();
            return false;
        }
        else{
            // Alert users password error
            alert("Error: Please check that you've entered and confirmed your password!");
            form.password.focus();
            return false;
        } 
    }
}



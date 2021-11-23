function validateAll(){
    
    if (loginFunction){
        document.form.submit();
    }
}

function setErrorFor(input, tooltip, message){
    document.getElementById(input).className = "form-control is-invalid";
    var fieldNameElement = document.getElementById(tooltip);
    fieldNameElement.innerHTML = message;
    document.getElementById(tooltip).style.display = "block";
}

function setSuccessFor(input, tooltip){
    document.getElementById(input).className = "form-control is-valid";
    document.getElementById(tooltip).style.display = "none";
}

function loginFunction() {
    
    var userNameValue = document.getElementById("user").value;



    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
    var mobile = /[+]63/g;
    var email = /^\S+@\S+.\S+$/;
    var usernameReg = /([A-Z-_])/gi;
    var alphaNum = /^(?:[0-9]+[a-z]|[a-z]+[0-9])[a-z0-9]*$/i;



        

       if (userNameValue == "") {
        setErrorFor("user","user-tooltip", 'username cannot be blank');
          return false;

       } else {

          if(letters.test(userNameValue)){
            setSuccessFor("user", "user-tooltip");

        }

        else {
            setErrorFor("user", "user-tooltip", 'Alphabets only!');

            return false;
        }

      }



    return true;
    

    
}




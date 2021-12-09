function validateAll(){
    
    if (myFunction){
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

function myFunction() {
    
    var fnameValue = document.getElementById("fname").value;
    var lnameValue  = document.getElementById("lname").value;
    var mnameValue  = document.getElementById("mname").value;
    var resIDValue  = document.getElementById("resID").value;
    var positionValue  = document.getElementById("positionInput").value;
    var userValue  = document.getElementById("user").value;
    var passValue  = document.getElementById("pass").value;
    var passrptValue  = document.getElementById("passrpt").value;


    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
    var mobile = /[+]63/g;
    var email = /^\S+@\S+.\S+$/;
    var usernameReg = /([A-Z-_])/gi;
    var alphaNum = /^(?:[0-9]+[a-z]|[a-z]+[0-9])[a-z0-9]*$/i;



    
       if (fnameValue == "") {
        setErrorFor("fname","fname-tooltip", 'First Name cannot be blank');
          return false;

       } else {

          if(letters.test(fnameValue)){
            setSuccessFor("fname", "fname-tooltip");

        }

        else {
            setErrorFor("fname", "fname-tooltip", 'Alphabets only!');

            return false;
        }

      }



       if (lnameValue == "") {
        setErrorFor("lname","lname-tooltip", 'Last Name cannot be blank');
          return false;

      } else {

        if(letters.test(lnameValue)){
          setSuccessFor("lname", "lname-tooltip");

        }

        else {
          setErrorFor("lname", "lname-tooltip", 'Alphabets only!');
          return false
        }

      }


        if (mnameValue == "") {
        setErrorFor("mname","mname-tooltip", 'Middle Name cannot be blank');
          return false;

      } else {

        if(letters.test(mnameValue)){
          setSuccessFor("mname", "mname-tooltip");

        }

        else {
          setErrorFor("mname", "mname-tooltip", 'Alphabets only!');
          return false
        }

      }   



      if (positionValue == "0"){         
          document.getElementById('positionInput').className = "form-control is-invalid";         
          document.getElementById("positionInput-tooltip").style.display = "block";         
          return false;     
      } else {         
        document.getElementById("positionInput-tooltip").style.display = "none";         
        document.getElementById('positionInput').className = "form-control is-valid";     
      }




        if (userValue == "") {
        setErrorFor("user","user-tooltip", 'Username cannot be blank');
          return false;
      }  else {
        setSuccessFor("user", "user-tooltip");
      
      }

        if (passValue== "") {
        setErrorFor("pass","pass-tooltip", 'Password cannot be blank');
          return false;
      }  else {
        setSuccessFor("pass", "pass-tooltip");
      
      }



      if (passValue == passrptValue) {
        setSuccessFor("passrpt", "passrpt-tooltip");
      } else {
        
        setErrorFor("passrpt","passrpt-tooltip", 'Password mismatched');
          return false;
      }
    
      

    return true;
    

    
}




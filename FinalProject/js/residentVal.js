function validateAll(){
    
    if (residentFunction){
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

function residentFunction() {
    
    var famNameValue = document.getElementById("famName").value;
    var fNameValue = document.getElementById("fName").value;
    var mNameValue = document.getElementById("mName").value;
    var aliasValue = document.getElementById("alias").value;
    var facemarkValue = document.getElementById("fmark").value;
    var birthdateValue = document.getElementById("bdate").value;
    var birthplaceValue = document.getElementById("bplace").value;
    var sexValue = document.getElementById("sexOption").value;
    var nationalityValue = document.getElementById("nation").value;
    var religionValue = document.getElementById("relbel").value;
    var occupationValue = document.getElementById("occupation").value;
    var spouseNameValue = document.getElementById("spname").value;
    var spouseOccuValue = document.getElementById("spOccu").value;
    var voterValue = document.getElementById("voterOption").value;


    var cityAddValue = document.getElementById("cityAdd").value;
    var provincialAddValue = document.getElementById("provinceAdd").value;
    var purokValue = document.getElementById("purok").value;
    var emailAddValue = document.getElementById("emailAdd").value;
    var homeNumber1Value = document.getElementById("hNumberOne").value;
    var homeNumber2Value = document.getElementById("hNumberTwo").value;
    var mobileNumber1Value = document.getElementById("mNumberOne").value;
    var mobileNumber2Value = document.getElementById("mNumberTwo").value;
    



    var letters = /^[A-Za-z ]+$/;
    var numbers = /^[0-9]+$/;
    var mobile = /[+]63/g;
    var email = /^\S+@\S+.\S+$/;
    var usernameReg = /([A-Z-_])/gi;
    var alphaNum = /^(?:[0-9]+[a-z]|[a-z]+[0-9])[a-z0-9]*$/i;


    
       if (famNameValue == "") {
        setErrorFor("famName","famName-tooltip", 'Family Name cannot be blank');
          return false;

       } else {

          if(letters.test(famNameValue)){
            setSuccessFor("famName", "famName-tooltip");

        }

        else {
            setErrorFor("famName", "famName-tooltip", 'Alphabets only!');

            return false;
        }

      }


      if (fNameValue == "") {
        setErrorFor("fName","fName-tooltip", 'First Name cannot be blank');
          return false;

       } else {

          if(letters.test(fNameValue)){
            setSuccessFor("fName", "fName-tooltip");

        }

        else {
            setErrorFor("fName", "fName-tooltip", 'Alphabets only!');

            return false;
        }

      }


      if (mNameValue == "") {
        setErrorFor("mName","mName-tooltip", 'Middle Name cannot be blank');
          return false;

       } else {

          if(letters.test(fNameValue)){
            setSuccessFor("mName", "mName-tooltip");

        }

        else {
            setErrorFor("mName", "mName-tooltip", 'Alphabets only!');

            return false;
        }

      }

          if (aliasValue == "") {
        setErrorFor("alias","alias-tooltip", 'Middle Name cannot be blank');
          return false;

       } else {

          if(letters.test(aliasValue)){
            setSuccessFor("alias", "alias-tooltip");

        }

        else {
            setErrorFor("alias", "alias-tooltip", 'Alphabets only!');

            return false;
        }

      }


          if (facemarkValue == "") {
         setErrorFor("fmark","fmark-tooltip", 'Middle Name cannot be blank');
          return false;

       } else {

          if(letters.test(facemarkValue)){
            setSuccessFor("fmark", "fmark-tooltip");

        }

        else {
            setErrorFor("fmark", "fmark-tooltip", 'Alphabets only!');

            return false;
        }

      }


          if (birthplaceValue == "") {
         setErrorFor("bplace","bplace-tooltip", 'Birth Place cannot be blank');
          return false;

       } else {

          if(letters.test(birthplaceValue)){
            setSuccessFor("bplace", "bplace-tooltip");

        }

        else {
            setErrorFor("bplace", "bplace-tooltip", 'Alphabets only!');

            return false;
        }

      }


        if (sexValue== "0"){         
          document.getElementById('sexOption').className = "form-control is-invalid";         
          document.getElementById("sexOption-tooltip").style.display = "block";         
          return false;     
      } else {         
          document.getElementById("sexOption-tooltip").style.display = "none";         
          document.getElementById('sexOption').className = "form-control is-valid";     
      }


          if (nationalityValue == "") {
         setErrorFor("nation","nation-tooltip", 'Nationality cannot be blank');
          return false;

       } else {

          if(letters.test(nationalityValue)){
            setSuccessFor("nation", "nation-tooltip");

        }

        else {
            setErrorFor("nation", "nation-tooltip", 'Alphabets only!');

            return false;
        }

      }


          if (religionValue == "") {
         setErrorFor("relbel","relbel-tooltip", 'Religion/Belief cannot be blank');
          return false;

       } else {

          if(letters.test(religionValue)){
            setSuccessFor("relbel", "relbel-tooltip");

        }

        else {
            setErrorFor("relbel", "relbel-tooltip", 'Alphabets only!');

            return false;
        }

      }


        if (occupationValue== "0"){         
          document.getElementById('occupation').className = "form-control is-invalid";         
          document.getElementById("occupation-tooltip").style.display = "block";         
          return false;     
      } else {         
          document.getElementById("occupation-tooltip").style.display = "none";         
          document.getElementById('occupation').className = "form-control is-valid";     
      }


          if (spouseNameValue == "") {
         setErrorFor("spname","spname-tooltip", 'Spouse Name cannot be blank');
          return false;

       } else {

          if(letters.test(spouseNameValue)){
            setSuccessFor("spname", "spname-tooltip");

        }

        else {
            setErrorFor("spname", "spname-tooltip", 'Alphabets only!');

            return false;
        }

      } 
      

          if (spouseOccuValue == "") {
         setErrorFor("spOccu","spOccu-tooltip", 'Spouse Occupation cannot be blank');
          return false;

       } else {

          if(letters.test(spouseOccuValue)){
            setSuccessFor("spOccu", "spOccu-tooltip");

        }

        else {
            setErrorFor("spOccu", "spOccu-tooltip", 'Alphabets only!');

            return false;
        }


      } 

        if (voterValue== "0"){         
          document.getElementById('voterOption').className = "form-control is-invalid";         
          document.getElementById("voterOption-tooltip").style.display = "block";         
          return false;     
      } else {         
          document.getElementById("voterOption-tooltip").style.display = "none";         
          document.getElementById('voterOption').className = "form-control is-valid";     
      }







       if (cityAddValue == "") {
        setErrorFor("cityAdd","cityAdd-tooltip", 'City Address cannot be blank');
          return false;

       } else {

          if(letters.test(cityAddValue)){
            setSuccessFor("cityAdd", "cityAdd-tooltip");

        }

        else {
            setErrorFor("cityAdd", "cityAdd-tooltip", 'Alphabets only!');

            return false;
        }

      }


       if (provincialAddValue == "") {
        setErrorFor("provinceAdd","provinceAdd-tooltip", 'provincial Address cannot be blank');
          return false;

       } else {

          if(letters.test(provincialAddValue)){
            setSuccessFor("provinceAdd", "provinceAdd-tooltip");

        }

        else {
            setErrorFor("provinceAdd", "provinceAdd-tooltip", 'Alphabets only!');

            return false;
        }

      }


       if (purokValue == "") {
        setErrorFor("purok","purok-tooltip", 'Purok cannot be blank');
          return false;

       } else {

          if(letters.test(purokValue)){
            setSuccessFor("purok", "purok-tooltip");

        }

        else {
            setErrorFor("purok", "purok-tooltip", 'Alphabets only!');

            return false;
        }

      }



       if (emailAddValue == "") {
        setErrorFor("emailAdd","emailAdd-tooltip", 'Email Address cannot be blank');
          return false;

       } else {

          if(letters.test(emailAddValue)){
            setSuccessFor("emailAdd", "emailAdd-tooltip");

        }

        else {
            setErrorFor("emailAdd", "emailAdd-tooltip", 'Alphabets only!');

            return false;
        }

      }


       if (homeNumber1Value == "") {
        setErrorFor("hNumberOne","hNumberOne-tooltip", 'Home Number 1 cannot be blank');
          return false;

       } else {

          if(numbers.test(homeNumber1Value)){
            setSuccessFor("hNumberOne", "hNumberOne-tooltip");

        }

        else {
            setErrorFor("hNumberOne", "hNumberOne-tooltip", 'Numbers only!');

            return false;
        }

      }


             if (homeNumber2Value == "") {
        setErrorFor("hNumberTwo","hNumberTwo-tooltip", 'Home Number 2 cannot be blank');
          return false;

       } else {

          if(numbers.test(homeNumber2Value)){
            setSuccessFor("hNumberTwo", "hNumberTwo-tooltip");

        }

        else {
            setErrorFor("hNumberTwo", "hNumberTwo-tooltip", 'Numbers only!');

            return false;
        }

      }


             if (mobileNumber1Value == "") {
        setErrorFor("mNumberOne","mNumberOne-tooltip", 'Mobile Number 1 cannot be blank');
          return false;

       } else {

          if(numbers.test(mobileNumber1Value)){
            setSuccessFor("mNumberOne", "mNumberOne-tooltip");

        }

        else {
            setErrorFor("mNumberOne", "mNumberOne-tooltip", 'Numbers only!');

            return false;
        }

      }


             if (mobileNumber2Value == "") {
        setErrorFor("mNumberTwo","mNumberTwo-tooltip", 'Mobile Number 2 cannot be blank');
          return false;

       } else {

          if(numbers.test(mobileNumber2Value)){
            setSuccessFor("mNumberTwo", "mNumberTwo-tooltip");

        }

        else {
            setErrorFor("mNumberTwo", "mNumberTwo-tooltip", 'Numbers only!');

            return false;
        }

      }


      

    return true;
    

    
}




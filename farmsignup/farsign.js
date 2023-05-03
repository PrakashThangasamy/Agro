function validation(){
    var email=document.getElementById("text");
    var phone=document.getElementById("phone");
    var pass=document.getElementById("pass");
    var cpass=document.getElementById("cpass");
    var location=document.getElementById("location");
    if(email.value=="")
    {
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Enter  username";
        document.getElementById("text").style.borderColor="red";
        return false;
    }
    else
    {
        document.getElementById("error-div").style.display="none";
        document.getElementById("text").style.borderColor="darkgreen";
    }
    if(pass.value.length<6||pass.value.length>=10||pass.value=="")
    {
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Enter 6 to 10 digit password";
        document.getElementById("pass").style.borderColor="red";
        return false;
    
    }
    else
    {
        document.getElementById("error-div").style.display="none";
        document.getElementById("pass").style.borderColor="darkgreen";
    }
    if(pass.value!=cpass.value){
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Password mismatch";
        document.getElementById("cpass").style.borderColor="red";
        return false;
    }
    else
    {
        document.getElementById("error-div").style.display="none";
        document.getElementById("cpass").style.borderColor="darkgreen";
    }
    if(location.value=="")
    {
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Enter  location";
        document.getElementById("location").style.borderColor="red";
        return false;
    }
    else
    {
        document.getElementById("error-div").style.display="none";
        document.getElementById("location").style.borderColor="darkgreen";
        
    }
    if(phone.value=="")
    {
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Enter mobile number";
        document.getElementById("phone").style.borderColor="red";
        return false;
    }
    if(phone.value.length!=10){
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Enter valid mobile number";
        document.getElementById("phone").style.borderColor="red";
        return false;
    }
    else{
        document.getElementById("error-div").style.display="none";
        document.getElementById("phone").style.borderColor="darkgreen";
        return true;
    }
    
}


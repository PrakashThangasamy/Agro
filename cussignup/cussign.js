function validation()
{
    var user=document.getElementById("text");
    var phone=document.getElementById("phone");
    var pass=document.getElementById("pass");
    var cpass=document.getElementById("cpass");
    if(user.value=="")
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
    }
    if(pass.value==""||pass.value.length<6||pass.value.length>10)
    {
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Enter 6 to 10 password";
        document.getElementById("pass").style.borderColor="red";
        return false;
    }
    else
    {
        document.getElementById("error-div").style.display="none";
        document.getElementById("pass").style.borderColor="darkgreen";
    }
    if(cpass.value!=pass.value)
    {
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Password Missmath";
        document.getElementById("cpass").style.borderColor="red";
        return false;
    }
    else
    {
        document.getElementById("error-div").style.display="none";
        document.getElementById("cpass").style.borderColor="darkgreen";
    }
}   
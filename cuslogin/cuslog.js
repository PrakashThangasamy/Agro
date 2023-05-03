function validation()
{
    var user=document.getElementById("text");
    var pass=document.getElementById("pass");
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
        document.getElementById("text").style.borderColor="green";
    }
    if(pass.value==""||pass.value.length<6||pass.value.length>10)
    {
        document.getElementById("error-div").style.display="block";
        document.getElementById("para").innerHTML="Enter 6 to 8 password";
        document.getElementById("pass").style.borderColor="red";
        return false;
    }
    else
    {
        document.getElementById("error-div").style.display="none";
        document.getElementById("text").style.borderColor="green";
        
    }
}
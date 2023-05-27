function register(firstname,lastname,email,password) {

    if (firstname == "")
    {
        alert('Input Firstname!');
        return false;
    }
    if (lastname == "")
    {
        alert('Input Lastname!');
        return false;
    }
    if (email == "")
    {
        alert('Input Email!');
        return false;
    }
    if (password == "")
    {
        alert('Input Password!');
        return false;
    }
    if (document.getElementById("user_chkpolicy").checked == false)
    {
        alert('Must accept Privacy Policy first!');
        return false;
    }
    document.getElementById("btnRegister").style.display="none";
    var divloader = document.getElementById("loadDiv");
    divloader.classList.remove("d-none");


    var http = new XMLHttpRequest();
        var url = 'src/store/register.php';
        var params = 'firstname=' + firstname + '&lastname=' + lastname + '&email=' + email + '&password=' + password;
        http.open('POST', url, true);
    
        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState == 4 && http.status == 200) 
            {
                    var url = "./EmailVerification.php";
                    var lowercaseUrl = url.toLowerCase();
                    window.location.assign(lowercaseUrl);
                    document.getElementById("btnRegister").style.display="block";
                    divloader.classList.add("d-none");
            }   
        }
        http.send(params); 
        

}

function showSideAlert() {
    var alertElement = document.getElementById('sideAlert');
    alertElement.classList.remove('d-none');
    setTimeout(function() {
        alertElement.classList.add('d-none'); // Hide the alert after 3 seconds
    }, 3000);
}   

function verifyotp(otp) {
    if (otp == "")
    {
        alert('Input OTP!');
        return false;
    }



    var http = new XMLHttpRequest();
        var url = 'src/store/verifyemail.php';
        var params = 'otp=' + otp;
        http.open('POST', url, true);
    
        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState == 4 && http.status == 200) 
            {

                if (http.responseText == "Success")
                {
                    alert('Successfully Verified. Please Login!'); 
                    var url = "./index.php";
                    var lowercaseUrl = url.toLowerCase();
                    window.location.assign(lowercaseUrl);
                }
                else
                {
                    alert(http.responseText); 
                }
            }   
        }
        http.send(params); 
}  
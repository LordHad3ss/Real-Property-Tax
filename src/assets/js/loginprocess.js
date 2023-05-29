function login(email,password) {

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

        var http = new XMLHttpRequest();
        var url = 'src/store/loginprocess.php';
        var params = 'email=' + email + '&password=' + password;
        http.open('POST', url, true);
    
        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState == 4 && http.status == 200) 
            {

                if (http.responseText == "Verify")
                {
                    window.location.assign("./EmailVerification.php");
                }
                else if (http.responseText == "Admin")
                {
                    window.location.assign("./src/views/admin/dashboard.php");
                }
                else if (http.responseText == "Consumer")
                {
                    window.location.assign("./src/views/consumer/dashboard.php");
                }
                else
                {
                    alert(http.responseText);
                    location.reload();
                }

            }   
        }
        http.send(params);

}
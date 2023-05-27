<?php
require 'connect.php';

session_start();

$postemail = $_POST['email'];
$postpassword = $_POST['password'];

$qryCheckEmail = "SELECT * FROM `tbl_rpt_users` WHERE `email` = '$postemail'";
$resCheckEmail = mysqli_query($conn,$qryCheckEmail);
$cntCheckEmail = mysqli_num_rows($resCheckEmail);





if ($cntCheckEmail != 1)
{
    echo "Email Address does not exist!";
}
else
{
    $rowCheckEmail = mysqli_fetch_assoc($resCheckEmail);
    $userid    = $rowCheckEmail['id'];
    $email     = $rowCheckEmail['email'];
    $password  = $rowCheckEmail['password'];
    $firstname = $rowCheckEmail['firstname'];
    $lastname  = $rowCheckEmail['lastname'];
    $usertype  = $rowCheckEmail['usertype'];
    $status  = $rowCheckEmail['status'];
    $name      = $firstname . ' ' . $lastname;
   
        if ($postemail == $email && password_verify($postpassword, $password))
        {
            if ($status == 0)
            {
                $_SESSION['email'] = $email;
                echo "Verify";
            }
            else
            {
            echo $usertype;
            $_SESSION['email'] = $email;
            $_SESSION['userid'] = $userid;
            $_SESSION['name'] = $name;
            }

        }
        else
        {
            echo "Incorrect email or password entered!";
        }
    
    
}



?>